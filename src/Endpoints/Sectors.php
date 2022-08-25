<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Messages\ResponseMediator;

/**
 * Sectors
 */
final class Sectors extends EndpointBase
{
    /**
     * Retrieve a count of properties within a polygon and the polygon coordinates.
     *
     * @error Not working properly.
     * @param  string $sector The full postcode sector.
     * @return array
     */
    public function getSectorCountAndPath(string $sector): array
    {
        return ResponseMediator::getContent($this->client->get("/sectors/{$sector}/total"));
    }
}
