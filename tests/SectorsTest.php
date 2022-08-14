<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

final class SectorsTest extends TestCase
{
    public function testGetSectorCountAndPath(): void
    {
        $response = $this->client()->sectors()->getSectorCountAndPath('BS15 4');
        $this->assertEquals(true, $response['status']);
    }
}
