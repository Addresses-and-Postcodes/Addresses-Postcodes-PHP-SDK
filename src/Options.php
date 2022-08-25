<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK;

use Psr\Http\Message\UriInterface;
use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Message\UriFactoryInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Options
 */
final class Options
{
    /**
     * options
     *
     * @var array
     */
    private array $options;

    /**
     * __construct
     *
     * @param  array $options
     * @return void
     */
    public function __construct(array $options = [])
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $this->options = $resolver->resolve($options);
    }

    /**
     * configureOptions
     *
     * @param  OptionsResolver $resolver
     * @return void
     */
    private function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'client_builder' => new ClientBuilder(),
                'uri' => 'https://addressesandpostcodes.co.uk/api/v3/',
                'uri_factory' => Psr17FactoryDiscovery::findUriFactory(),
            ]
        );
        $resolver->setAllowedTypes('uri', 'string');
        $resolver->setAllowedTypes('client_builder', ClientBuilder::class);
        $resolver->setAllowedTypes('uri_factory', UriFactoryInterface::class);
    }

    /**
     * getClientBuilder
     *
     * @return ClientBuilder
     */
    public function getClientBuilder(): ClientBuilder
    {
        return $this->options['client_builder'];
    }

    /**
     * getUriFactory
     *
     * @return UriFactoryInterface
     */
    public function getUriFactory(): UriFactoryInterface
    {
        return $this->options['uri_factory'];
    }

    /**
     * getUri
     *
     * @return UriInterface
     */
    public function getUri(): UriInterface
    {
        return $this->getUriFactory()->createUri($this->options['uri']);
    }
}
