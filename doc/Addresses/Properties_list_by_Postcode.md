## Properties list by Postcode

[Back to the doc](../README.md)

#### Description

Retrieve a list of properties within a postcode.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->addresses()->propertiesListByPostcode('AB101AB');

echo '<pre>';
print_r($output);
echo '</pre>';
```