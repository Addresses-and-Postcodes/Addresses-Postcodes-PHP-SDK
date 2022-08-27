<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function client(): Client
    {
        return new Client('API_KEY');
    }
}
