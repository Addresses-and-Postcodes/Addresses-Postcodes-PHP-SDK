<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Messages;

use Psr\Http\Message\ResponseInterface;

final class ResponseHandler
{
    public static function getContent(ResponseInterface $response): array
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}
