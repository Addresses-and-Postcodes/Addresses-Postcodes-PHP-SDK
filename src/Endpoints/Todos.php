<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints;

use AddressesAndPostcodes\Lookup\PHP\SDK\Helpers\Helpers;
use AddressesAndPostcodes\Lookup\PHP\SDK\Messages\ResponseHandler;

final class Todos extends EndpointBase
{
    public function first(): array
    {
        return Helpers::getFirstValueOfArray($this->all());
    }

    public function last(): array
    {
        return Helpers::getLastValueOfArray($this->all());
    }

    public function all(): array
    {
        return ResponseHandler::getContent($this->apiClient->get('/todos'));
    }
}
