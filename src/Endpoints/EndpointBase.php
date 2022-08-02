<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\ApiClient;

class EndpointBase
{
    /**
     * apiClient
     *
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * __construct
     *
     * @param  ApiClient $apiClient
     * @return void
     */
    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }
}
