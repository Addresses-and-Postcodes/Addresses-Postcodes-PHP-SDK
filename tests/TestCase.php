<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function client(): Client
    {
        return new Client('1616589158-361070052-462388701-1635564164');
    }
}
