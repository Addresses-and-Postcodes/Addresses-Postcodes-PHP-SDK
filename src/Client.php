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
    public function __construct(string $api_key, ClientBuilder $clientBuilder = null, UriFactory $uriFactory = null)
    {
        $this->api_key = $api_key;
        $this->clientBuilder = $clientBuilder ?: new ClientBuilder();
        $uriFactory = $uriFactory ?: Psr17FactoryDiscovery::findUriFactory();
        $this->clientBuilder->addPlugin(new BaseUriPlugin($uriFactory->createUri('http://postcodes.test/api/v3/')));
        $this->clientBuilder->setHeaders([
            'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ]);
    }

    /**
     * Enable Error Handler.
     *
     * @return void
     */
    public function enableErrorHandler(): void
    {
        $this->clientBuilder->enableErrorHandler();
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
     * Get area boundary path.
     *
     * Retrieve a list of coordinates to produce a polygon around the postcode area.
     *
     * @return Endpoints\AreaBoundaryPath
     */
    public function areaBoundaryPath(): Endpoints\AreaBoundaryPath
    {
        return new Endpoints\AreaBoundaryPath($this);
    }
}
