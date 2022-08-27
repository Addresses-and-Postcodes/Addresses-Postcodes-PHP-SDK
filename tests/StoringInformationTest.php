<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

/**
 * StoringInformationTest
 */
final class StoringInformationTest extends TestCase
{
    /**
     * testGetSavedSearches
     *
     * @return void
     */
    public function testGetSavedSearches(): void
    {
        $response = $this->client()->storingInformation()->getSavedSearches();
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testSaveASearch
     *
     * @return void
     */
    public function testSaveASearch(): void
    {
        $response = $this->client()->storingInformation()->saveASearch([
            'name' => 'my-first-search',
            'params' => [
                'endpoint' => '/api/v3/properties/total/by/path'
            ]
        ]);
        $this->assertEquals(true, $response['status']);
    }

    /**
     * testDeleteASearch
     *
     * @return void
     */
    public function testDeleteASearch(): void
    {
        $response = $this->client()->storingInformation()->deleteSearch('1');
        $this->assertEquals(true, $response['status']);
    }
}
