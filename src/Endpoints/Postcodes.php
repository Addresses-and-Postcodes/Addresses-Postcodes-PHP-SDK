<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Helpers\Helpers;
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
    public function postcodeCountByPolygon(array $path): array
    {
        $uri_path = Helpers::pathConverter($path);
        return ResponseHandler::getContent($this->client->get("/postcodes/total/by/path"), $uri_path);
    }

    /**
     * Retrieve a list of postcodes within a polygon.
     *
     * @error Not working properly.
     * @return array
     */
    public function postcodeListByPolygon(array $path): array
    {
        $uri_path = Helpers::pathConverter($path);
        return ResponseHandler::getContent($this->client->get("/postcodes/list/by/path"), $uri_path);
    }

    /**
     * Get the geographical path of a postcode.
     *
     * @param  string $postcode Retrieve the geographical path of a postcode.
     * @return array
     */
    public function postcodeGetGeographicalPath(string $postcode): array
    {
        return ResponseHandler::getContent($this->client->get("/postcodes/{$postcode}/geo/path"));
    }
}
