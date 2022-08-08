<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Messages\ResponseHandler;

final class AreaBoundaryPath extends EndpointBase
{
    public function get(string $area): array
    {
        return ResponseHandler::getContent($this->client->get("/areas/{$area}/path"));
    }
}
