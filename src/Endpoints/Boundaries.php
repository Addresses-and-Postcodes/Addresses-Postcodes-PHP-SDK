<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Messages\ResponseHandler;

/**
 * Boundaries
 */
final class Boundaries extends EndpointBase
{
    /**
     * Retrieve a list of coordinates to produce a polygon around the postcode area.
     *
     * @param  string $area The area that needs to be recovered.
     * @return array
     */
    public function getAreaBoundaryPath(string $area): array
    {
        return ResponseHandler::getContent($this->client->get("/areas/{$area}/path"));
    }

    /**
     * Retrieve a list of coordinates to produce a polygon around the postcode sector.
     *
     * @param  string $sector The sector that needs to be recovered.
     * @return array
     */
    public function getSectorBoundaryPath(string $sector): array
    {
        return ResponseHandler::getContent($this->client->get("/sectors/{$sector}/path"));
    }
}
