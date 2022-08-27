# Addresses Postcodes PHP SDK

![GitHub](https://img.shields.io/github/license/Addresses-and-Postcodes/Addresses-Postcodes-PHP-SDK)

## Requirements

* PHP >= 7.4
* A [HTTP client](https://packagist.org/providers/php-http/client-implementation)
* A [PSR-7 implementation](https://packagist.org/providers/psr/http-message-implementation)
* (optional) PHPUnit to run tests.

## Install

Via Composer:

```bash
$ composer require addresses-and-postcodes/lookup-php-sdk
```

## Basic usage of `Addresses-Postcodes-PHP-SDK` client

```php
<?php

// This file is generated by Composer
require_once __DIR__ . '/vendor/autoload.php';

$client = new AddressesAndPostcodes\Lookup\PHP\SDK\Client('API_KEY');
$response = $client->boundaries()->getAreaBoundaryPath('AB');
```
## Tests

> **WARNING**: Before running the tests, please add your api key in ```tests/TestCase.php```

```php
<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Tests;

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function client(): Client
    {
        return new Client('API_KEY');
    }
}
```

To run the tests, go to the root folder of the project in terminal and run the following command:

```bash
composer tests
```


## Documentation

See the [`doc` directory](doc/) for more detailed documentation.

## License

Licensed under the MIT license, see [`LICENSE`](LICENSE.md)
