<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

use Psr\Http\Client\ClientInterface;
use AddressesAndPostcodes\Lookup\PHP\SDK\Client;
use AddressesAndPostcodes\Lookup\PHP\SDK\Tests\TestCase;
use AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints\Sectors;
use AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints\Postcodes;
use AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints\Addresses;
use AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints\Boundaries;
use AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints\PostcodeAPI;
use AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints\StoringInformation;
use AddressesAndPostcodes\Lookup\PHP\SDK\Endpoints\PostcodeInformation;

/**
 * ClientTest
 */
final class ClientTest extends TestCase
{
    /**
     * testClientInstance
     *
     * @return void
     */
    public function testClientInstance(): void
    {
        $this->assertInstanceOf(Client::class, $this->client());
    }

    /**
     * testClientInterfaceInstance
     *
     * @return void
     */
    public function testClientInterfaceInstance(): void
    {
        $this->assertInstanceOf(ClientInterface::class, $this->client()->getHttpClient());
    }

    /**
     * testBoundariesInstance
     *
     * @return void
     */
    public function testBoundariesInstance(): void
    {
        $this->assertInstanceOf(Boundaries::class, $this->client()->boundaries());
    }

    /**
     * testSectorInstance
     *
     * @return void
     */
    public function testSectorsInstance(): void
    {
        $this->assertInstanceOf(Sectors::class, $this->client()->sectors());
    }

    /**
     * testPostcodesInstance
     *
     * @return void
     */
    public function testPostcodesInstance(): void
    {
        $this->assertInstanceOf(Postcodes::class, $this->client()->postcodes());
    }

    /**
     * testAddressesInstance
     *
     * @return void
     */
    public function testAddressesInstance(): void
    {
        $this->assertInstanceOf(Addresses::class, $this->client()->addresses());
    }

    /**
     * testPostcodeInformationInstance
     *
     * @return void
     */
    public function testPostcodeInformationInstance(): void
    {
        $this->assertInstanceOf(PostcodeInformation::class, $this->client()->postcodeInformation());
    }

    /**
     * testStoringInformation
     *
     * @return void
     */
    public function testStoringInformation(): void
    {
        $this->assertInstanceOf(StoringInformation::class, $this->client()->storingInformation());
    }

    /**
     * testPostcodeAPI
     *
     * @return void
     */
    public function testPostcodeAPI(): void
    {
        $this->assertInstanceOf(PostcodeAPI::class, $this->client()->postcodeAPI());
    }
}
