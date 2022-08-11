<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Messages\ResponseHandler;

/**
 * Addresses
 */
final class Addresses extends EndpointBase
{
    /**
     * Retrieve a property by building name or number and postcode.
     *
     * @param  string $building Name or number of the building being searched for.
     * @param  string $postcode Postcode being searched
     * @return array
     */
    public function searchForProperty(string $building, string $postcode): array
    {
        return ResponseHandler::getContent($this->client->get("/paf/properties/lookup", "building={$building}&postcode={$postcode}"));
    }
}
