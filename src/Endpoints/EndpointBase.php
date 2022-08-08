<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

abstract class EndpointBase
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
     * @param  Client $client
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
