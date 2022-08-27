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
        $path = [
            ["lat" => 51.478302, "lng" => -2.498105],
            ["lat" => 51.478484, "lng" => -2.496351],
            ["lat" => 51.478108, "lng" => -2.496052],
            ["lat" => 1.478132, "lng" => -2.494838],
            ["lat" => 51.478289, "lng" => -2.494202],
            ["lat" => 51.478242, "lng" => -2.493962],
            ["lat" => 51.477769, "lng" => -2.493253],
            ["lat" => 51.477761, "lng" => -2.492371],
            ["lat" => 51.477173, "lng" => -2.491592],
            ["lat" => 51.477134, "lng" => -2.491379],
            ["lat" => 51.477923, "lng" => -2.488219],
            ["lat" => 51.477855, "lng" => -2.487678],
            ["lat" => 51.477899, "lng" => -2.48659],
            ["lat" => 51.477827, "lng" => -2.486426],
            ["lat" => 51.476326, "lng" => -2.485248],
            ["lat" => 51.476193, "lng" => -2.485034],
            ["lat" => 51.475105, "lng" => -2.485288],
        ];
        $response = $this->client()->addresses()->propertiesCountByPolygon($path);
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPropertiesCountByRadius
     *
     * @return void
     */
    public function testPropertiesCountByRadius(): void
    {
        $response = $this->client()->addresses()->propertiesCountByRadius('51.478302', '-2.498105', '100000');
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testPropertiesCountByLinePolygon
     *
     * @return void
     */
    public function testPropertiesCountByLinePolygon(): void
    {
        $path = [
            ["lat" => 51.478302, "lng" => -2.498105],
            ["lat" => 51.478484, "lng" => -2.496351],
            ["lat" => 51.478108, "lng" => -2.496052],
            ["lat" => 1.478132, "lng" => -2.494838],
            ["lat" => 51.478289, "lng" => -2.494202],
            ["lat" => 51.478242, "lng" => -2.493962],
            ["lat" => 51.477769, "lng" => -2.493253],
            ["lat" => 51.477761, "lng" => -2.492371],
            ["lat" => 51.477173, "lng" => -2.491592],
            ["lat" => 51.477134, "lng" => -2.491379],
            ["lat" => 51.477923, "lng" => -2.488219],
            ["lat" => 51.477855, "lng" => -2.487678],
            ["lat" => 51.477899, "lng" => -2.48659],
            ["lat" => 51.477827, "lng" => -2.486426],
            ["lat" => 51.476326, "lng" => -2.485248],
            ["lat" => 51.476193, "lng" => -2.485034],
            ["lat" => 51.475105, "lng" => -2.485288],
        ];
        $response = $this->client()->addresses()->propertiesCountByLinePolygon($path, '100000');
        $this->assertEquals(true, $response['status']);
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
