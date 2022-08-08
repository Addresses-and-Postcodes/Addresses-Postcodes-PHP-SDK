<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK;

use League\BooBoo\BooBoo;
use Http\Client\Common\Plugin;
use Psr\Http\Client\ClientInterface;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Client\Common\HttpMethodsClient;
use mzdr\OhSnap\Formatter\PrettyFormatter;
use Http\Client\Common\PluginClientFactory;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Http\Client\Common\HttpMethodsClientInterface;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;

final class ClientBuilder
{
    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * @var RequestFactoryInterface
     */
    private $requestFactoryInterface;

    /**
     *
     * @var StreamFactoryInterface
     */
    private $streamFactoryInterface;

    /**
     *
     * @var array
     */
    private array $plugins = [];

    /**
     * __construct
     *
     * @param  ClientInterface $httpClient Client to do HTTP requests, if not set,
     *                         auto discovery will be used to find a HTTP client.
     * @param  RequestFactoryInterface $requestFactoryInterface
     * @param  StreamFactoryInterface $streamFactoryInterface
     * @return void
     */
    public function __construct(
        ClientInterface $httpClient = null,
        RequestFactoryInterface $requestFactoryInterface = null,
        StreamFactoryInterface $streamFactoryInterface = null
    ) {
        $this->httpClient = $httpClient ?: HttpClientDiscovery::find();
        $this->requestFactoryInterface = $requestFactoryInterface ?: Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactoryInterface = $streamFactoryInterface ?: Psr17FactoryDiscovery::findStreamFactory();
    }

    /**
     * getHttpClient
     *
     * @return HttpMethodsClientInterface
     */
    public function getHttpClient(): HttpMethodsClientInterface
    {
        $client = (new PluginClientFactory())->createClient($this->httpClient, $this->plugins);
        return new HttpMethodsClient($client, $this->requestFactoryInterface, $this->streamFactoryInterface);
    }

    /**
     * addPlugin
     *
     * @param  Plugin $plugin
     * @return void
     */
    public function addPlugin(Plugin $plugin)
    {
        $this->plugins[] = $plugin;
    }

    /**
     * setHeader
     *
     * @param  string $key
     * @param  string $value
     * @return void
     */
    public function setHeader($key, $value): void
    {
        $this->plugins[] = new HeaderDefaultsPlugin([$key => $value]);
    }

    /**
     * setHeaders
     *
     * @param  array $values
     * @return void
     */
    public function setHeaders(array $values): void
    {
        $this->plugins[] = new HeaderDefaultsPlugin($values);
    }

    /**
     * Enable Error Handler.
     *
     * @return void
     */
    public function enableErrorHandler(): void
    {
        $options = [
            'theme' => ['default', '.frame-details>.preview:not(.-excerpt) {height: auto;}'],
            'template' => null,
            'excerptOnly' => false,
            'excerptSize' => 20,
            'header' => null,
            'footer' => null
        ];
        $booboo = new BooBoo([new PrettyFormatter($options)]);
        $booboo->register();
    }
}
