<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK;

use Psr\Http\Message\ResponseInterface;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\HttpMethodsClientInterface;

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
     * @param  string $api_key
     * @param  bool $enable_error_handler
     * @return void
     */
    public function __construct(string $api_key, bool $enable_error_handler = false, Options $options = null)
    {
        // API Key & New Options
        $this->api_key = $api_key;
        $options = $options ?? new Options();

        // Client Builder
        $this->clientBuilder = $options->getClientBuilder();
        if ($enable_error_handler) {
            $this->clientBuilder->enableErrorHandler();
        }
        $this->clientBuilder->addPlugin(new BaseUriPlugin($options->getUri()));

        // Set Headers
        $this->clientBuilder->setHeaders([
            'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ]);
    }

    /**
     * Get Http Client.
     *
     * @return HttpMethodsClientInterface
     */
    public function getHttpClient(): HttpMethodsClientInterface
    {
        return $this->clientBuilder->getHttpClient();
    }

    /**
     * Retrieve endpoints from GET method using api key.
     *
     * @return ResponseInterface
     */
    public function get(string $uri, string $end_uri = null): ResponseInterface
    {
        if ($end_uri)
            return $this->clientBuilder->getHttpClient()->get("$uri?key={$this->api_key}&$end_uri");
        return $this->clientBuilder->getHttpClient()->get("$uri?key={$this->api_key}");
    }

    /**
     * Send data to endpoints with POST method using API key.
     *
     * @param  string|UriInterface $uri
     * @return ResponseInterface
     */
    public function post(string $uri, array $data = [], string $body = ''): ResponseInterface
    {
        return $this->clientBuilder->getHttpClient()->post("$uri?key={$this->api_key}", $data, $body);
    }

    /**
     * Sends a DELETE request.
     *
     * @param string|UriInterface $uri
     * @param string|StreamInterface|null $body
     *
     * @throws Exception
     */
    public function delete($uri, array $headers = [], $body = null): ResponseInterface
    {
        return $this->clientBuilder->getHttpClient()->delete("$uri?key={$this->api_key}", $headers, $body);
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

    /**
     * Sectors
     *
     * @return Endpoints\Sectors
     */
    public function sectors(): Endpoints\Sectors
    {
        return new Endpoints\Sectors($this);
    }

    /**
     * Postcodes
     *
     * @return Endpoints\Postcodes
     */
    public function postcodes(): Endpoints\Postcodes
    {
        return new Endpoints\Postcodes($this);
    }

    /**
     * Addresses
     *
     * @return Endpoints\Addresses
     */
    public function addresses(): Endpoints\Addresses
    {
        return new Endpoints\Addresses($this);
    }

    /**
     * PostcodeInformation
     *
     * @return Endpoints\PostcodeInformation
     */
    public function postcodeInformation(): Endpoints\PostcodeInformation
    {
        return new Endpoints\PostcodeInformation($this);
    }

    /**
     * StoringInformation
     *
     * @return Endpoints\StoringInformation
     */
    public function storingInformation(): Endpoints\StoringInformation
    {
        return new Endpoints\StoringInformation($this);
    }

    /**
     * PostcodeAPI
     *
     * @return Endpoints\PostcodeAPI
     */
    public function postcodeAPI(): Endpoints\PostcodeAPI
    {
        return new Endpoints\PostcodeAPI($this);
    }
}
