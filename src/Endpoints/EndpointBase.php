<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

class EndpointBase
{
    /**
     * apiClient
     *
     * @var Client
     */
    protected $client;

    /**
     * __construct
     *
     * @param  ApiClient $apiClient
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
