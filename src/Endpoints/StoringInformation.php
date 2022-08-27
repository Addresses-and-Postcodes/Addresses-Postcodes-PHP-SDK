<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Messages\ResponseMediator;

final class StoringInformation extends EndpointBase
{
    /**
     * Get a list of all your saves searches - By polygon or radius.
     *
     * @return array
     */
    public function getSavedSearches(): array
    {
        return ResponseMediator::getContent($this->client->get("/postcodes/door-drop"));
    }

    /**
     * Save a Polygon or Radius search to your account.
     *
     * @return void
     */
    public function saveASearch(array $params = []): array
    {
        return ResponseMediator::getContent($this->client->post("/postcodes/door-drop", $params));
    }

    /**
     * Remove / hide a Polygon or Radius search to your account.
     * 
     * @return void
     */
    public function deleteSearch(string $id): array
    {
        return ResponseMediator::getContent($this->client->delete("/postcodes/door-drop", ['id' => $id]));
    }
}
