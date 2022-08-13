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
        $uri_end = http_build_query(['building' => $building, 'postcode' => $postcode]);
        return ResponseHandler::getContent($this->client->get("/paf/properties/lookup", $uri_end));
    }

    /**
     * Retrieve a list of properties within a postcode.
     *
     * @param  string $postcode Postcode being searched.
     * @return array
     */
    public function propertiesListByPostcode(string $postcode): array
    {
        return ResponseHandler::getContent($this->client->get("/postcodes/{$postcode}/addresses"));
    }

    /**
     * Retrieve a count of properties within a polygon.
     *
     * @param  string $path array of [lat, lng] values of the polygon.
     * @return array
     */
    public function propertiesCountByPolygon(string $path): array
    {
        return ResponseHandler::getContent($this->client->get("/properties/total/by/path", $path));
    }

    /**
     * Retrieve a count of properties within radius.
     *
     * @param  string $lat latitude of the center point of your search.
     * @param  string $lng longitude of the center point of your search.
     * @param  string $radius Distance in meters from the center lat, lng.
     * @return array
     */
    public function propertiesCountByRadius(string $lat, string $lng, string $radius): array
    {
        $uri_end = http_build_query(['lat' => $lat, 'lng' => $lng, 'radius' => $radius]);
        return ResponseHandler::getContent($this->client->get("/properties/total/by/radius", $uri_end));
    }

    /**
     * Retrieve a count of properties a set buffer from a line.
     *
     * @param  string $path array of [lat, lng] values of the polygon.
     * @param  string $radius Distance in meters from the center lat, lng
     * @return array
     */
    public function propertiesCountByLinePolygon(string $path, string $radius): array
    {
        return ResponseHandler::getContent($this->client->get("/properties/total/by/radius", $path . "&radius={$radius}"));
    }

    /**
     * Retrieve a count of properties within a postcode.
     *
     * @param  mixed $postcode The full postcode.
     * @return array
     */
    public function propertiesCountByPostcode(string $postcode): array
    {
        return ResponseHandler::getContent($this->client->get("/postcodes/{$postcode}/total"));
    }
}
