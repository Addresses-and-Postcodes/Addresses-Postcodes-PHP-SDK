<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

final class PostcodesTest extends TestCase
{
    /**
     * testPostcodeCountByPolygon
     *
     * @return void
     */
    public function testPostcodeCountByPolygon(): void
    {
        // TODO: Here
    }

    /**
     * testPostcodeListByPolygon
     *
     * @return void
     */
    public function testPostcodeListByPolygon(): void
    {
        // TODO: Here
    }

    /**
     * testPostcodeGetGeographicalPath
     *
     * @return void
     */
    public function testPostcodeGetGeographicalPath(): void
    {
        $response = $this->client()->postcodes()->postcodeGetGeographicalPath('ab101ab');
        $this->assertEquals(true, $response['status']);
    }
}
