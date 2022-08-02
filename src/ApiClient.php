<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK;

use Http\Message\UriFactory;
use Psr\Http\Message\ResponseInterface;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Client\Common\Plugin\BaseUriPlugin;

final class ApiClient
{
    /**
     * clientBuilder
     *
     * @var ClientBuilder
     */
    private $clientBuilder;

    /**
     * __construct
     *
     * @param  ClientBuilder $clientBuilder
     * @return void
     */
    public function __construct(ClientBuilder $clientBuilder = null, UriFactory $uriFactory = null)
    {
        $this->clientBuilder = $clientBuilder ?: new ClientBuilder();
        $uriFactory = $uriFactory ?: Psr17FactoryDiscovery::findUriFactory();
        $this->clientBuilder->addPlugin(new BaseUriPlugin($uriFactory->createUri('https://jsonplaceholder.typicode.com')));
        $this->clientBuilder->setHeaders([
            'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ]);
    }

    /**
     * get
     *
     * @return ResponseInterface
     */
    public function get(string $endpoint): ResponseInterface
    {
        return $this->clientBuilder->getHttpClient()->get($endpoint);
    }

    /**
     * todos
     *
     * @return Endpoints\Todos
     */
    public function todos(): Endpoints\Todos
    {
        return new Endpoints\Todos($this);
    }
}
