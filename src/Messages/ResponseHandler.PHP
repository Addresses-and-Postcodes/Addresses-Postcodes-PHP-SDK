<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Messages;

use AddressesAndPostcodes\Lookup\PHP\SDK\Exceptions\InvalidAPITokenException;
use AddressesAndPostcodes\Lookup\PHP\SDK\Exceptions\OutOfLookupCreditsException;
use AddressesAndPostcodes\Lookup\PHP\SDK\Exceptions\PostcodeAreaException;
use Psr\Http\Message\ResponseInterface;

/**
 * ResponseHandler
 */
final class ResponseHandler
{
    /**
     * getContent
     *
     * @param  ResponseInterface $response
     * @return array
     */
    public static function getContent(ResponseInterface $response): array
    {
        $output = json_decode($response->getBody()->getContents(), true);
        if ($output['status'] === false) {
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
            }
        }
        return $output;
    }
}
