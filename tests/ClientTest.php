<?php

use Psr\Http\Client\ClientInterface;
use AddressesAndPostcodes\Lookup\PHP\SDK\Client;
use AddressesAndPostcodes\Lookup\PHP\SDK\Tests\TestCase;

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
}
