<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

use AddressesAndPostcodes\Lookup\PHP\SDK\ClientBuilder;
use Http\Client\Common\HttpMethodsClientInterface;

final class ClientBuilderTest extends TestCase
{
    /**
     * testClientBuilderInstance
     *
     * @return void
     */
    public function testClientBuilderInstance(): void
    {
        $this->assertInstanceOf(ClientBuilder::class, new ClientBuilder);
    }

    /**
     * testHttpMethodsClientInterfaceinstance
     *
     * @return void
     */
    public function testHttpMethodsClientInterfaceInstance(): void
    {
        $clientBuilder = new ClientBuilder();
        $this->assertInstanceOf(HttpMethodsClientInterface::class, $clientBuilder->getHttpClient());
    }
}
