<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Messages\ResponseHandler;

/**
 * Postcodes
 */
final class Postcodes extends EndpointBase
{
    /**
     * Retrieve a count of postcodes within a polygon.
     *
     * @error Not working properly.
     */
    public function postcodeCountByPolygon(string $path): array
    {
        return ResponseHandler::getContent($this->client->get("/postcodes/total/by/path"));
    }

    /**
     * Retrieve a list of postcodes within a polygon.
     * 
     * @error Not working properly.
     * @return array
     */
    public function postcodeListByPolygon(string $path): array
    {
        return ResponseHandler::getContent($this->client->get("/postcodes/list/by/path"));
    }
}
