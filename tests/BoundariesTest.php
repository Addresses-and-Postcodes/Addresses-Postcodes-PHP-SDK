<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

/**
 * BoundariesTest
 */
final class BoundariesTest extends TestCase
{
    /**
     * testGetAreaBoundaryPath
     *
     * @return void
     */
    public function testGetAreaBoundaryPath(): void
    {
        $response = $this->client()->boundaries()->getAreaBoundaryPath('AB');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testGetSectorBoundaryPath
     *
     * @return void
     */
    public function testGetSectorBoundaryPath(): void
    {
        $response = $this->client()->boundaries()->getSectorBoundaryPath('BS15 4');
        $this->assertEquals(true, $response['status']);
    }
}
