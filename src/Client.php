<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK;

use Http\Message\UriFactory;
use Psr\Http\Message\ResponseInterface;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Client\Common\Plugin\BaseUriPlugin;

final class Client
{
    /**
     * clientBuilder
     *
     * @var ClientBuilder
     */
    private $clientBuilder;

    /**
     * token
     *
     * @var string
     */
    private $api_key;

    /**
     * __construct
     *
     * @param  ClientBuilder $clientBuilder
     * @return void
     */
    public function __construct(string $api_key, bool $enable_error_handler = false, ClientBuilder $clientBuilder = null, UriFactory $uriFactory = null)
    {
        $this->api_key = $api_key;
        $this->clientBuilder = $clientBuilder ?: new ClientBuilder();
        if ($enable_error_handler) $this->clientBuilder->enableErrorHandler();
        $uriFactory = $uriFactory ?: Psr17FactoryDiscovery::findUriFactory();
        $this->clientBuilder->addPlugin(new BaseUriPlugin($uriFactory->createUri('http://postcodes.test/api/v3/')));
        $this->clientBuilder->setHeaders([
            'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ]);
    }

    /**
     * Retrieve endpoints from GET method using api key.
     *
     * @return ResponseInterface
     */
    public function get(string $endpoint): ResponseInterface
    {
        return $this->clientBuilder->getHttpClient()->get("$endpoint?key={$this->api_key}");
    }

    /**
     * Boundaries.
     *
     * @return Endpoints\Boundaries
     */
    public function boundaries(): Endpoints\Boundaries
    {
        return new Endpoints\Boundaries($this);
    }
}
