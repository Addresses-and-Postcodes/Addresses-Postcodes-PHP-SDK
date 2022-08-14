<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

final class AddressesTest extends TestCase
{
    /**
     * testSearchForProperty
     *
     * @return void
     */
    public function testSearchForProperty(): void
    {
        $response = $this->client()->addresses()->searchForProperty('Aberdeen City Council', 'AB10 1AQ');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPropertiesListByPostcode
     *
     * @return void
     */
    public function testPropertiesListByPostcode(): void
    {
        $response = $this->client()->addresses()->propertiesListByPostcode('ab101ab');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPropertiesCountByPolygon
     *
     * @return void
     */
    public function testPropertiesCountByPolygon(): void
    {
        // TODO: Here
    }

    /**
     * testPropertiesCountByRadius
     *
     * @return void
     */
    public function testPropertiesCountByRadius(): void
    {
        // TODO: Here
    }

    /**
     * testPropertiesCountByLinePolygon
     *
     * @return void
     */
    public function testPropertiesCountByLinePolygon(): void
    {
        // TODO: Here
    }

    /**
     * testPropertiesCountByPostcode
     *
     * @return void
     */
    public function testPropertiesCountByPostcode(): void
    {
        $response = $this->client()->addresses()->propertiesCountByPostcode('CB2 8BZ');
        $this->assertEquals(true, $response['status']);
    }
}
