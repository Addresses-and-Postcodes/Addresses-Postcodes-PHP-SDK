<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

final class PostcodeInformationTest extends TestCase
{
    public function testPostcodeGEOInformation(): void
    {
        $response = $this->client()->postcodeInformation()->postcodeGEOInformation('ab101ab');
        $this->assertEquals(true, $response['status']);
    }
}
