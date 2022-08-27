<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Messages;

use Psr\Http\Message\ResponseInterface;
use AddressesAndPostcodes\Lookup\PHP\SDK\Exceptions\ErrorException;
use AddressesAndPostcodes\Lookup\PHP\SDK\Exceptions\PostcodeAreaException;
use AddressesAndPostcodes\Lookup\PHP\SDK\Exceptions\PostcodeSectorException;
use AddressesAndPostcodes\Lookup\PHP\SDK\Exceptions\InvalidAPITokenException;
use AddressesAndPostcodes\Lookup\PHP\SDK\Exceptions\OutOfLookupCreditsException;

/**
 * ResponseMediator
 */
final class ResponseMediator
{
    /**
     * getContent
     *
     * @param  ResponseInterface $response
     * @return array
     */
    public static function getContent(ResponseInterface $response): array
    {
        $response = $response->getBody()->getContents();
        $output = json_decode($response, true);

        if ($output == null) {
            echo $response;
            die();
        }

        if (!is_array($output) || !array_key_exists('status', $output))
            throw new ErrorException($output['message'], 500, E_ERROR, $output['file'], $output['line']);

        if (is_array($output) && !$output['status']) {
            switch (true) {
                case str_contains(strtolower($output['error']), 'api token'):
                    throw new InvalidAPITokenException($output['error']);
                    break;
                case str_contains(strtolower($output['error']), 'area was not found'):
                    throw new PostcodeAreaException($output['error']);
                    break;
                case str_contains(strtolower($output['error']), 'lookup credits'):
                    throw new OutOfLookupCreditsException($output['error']);
                    break;
                case str_contains(strtolower($output['error']), 'sector was not found'):
                    throw new PostcodeSectorException($output['error']);
                    break;
                default:
                    throw new ErrorException($output['error']);
                    break;
            }
        }
        return $output;
    }
}
