<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Messages\ResponseMediator;

/**
 * PostcodeInformation
 */
final class PostcodeInformation extends EndpointBase
{
    /**
     * Returns latitude & longitude centroid for the postcode, County and town.
     *
     * @param  string $postcode Postcode to lookup.
     * @return array
     */
    public function postcodeGEOInformation(string $postcode): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/{$postcode}/geo"));
    }
}
