## Properties count by postcode

[Back to the doc](../README.md)

#### Description

Retrieve a count of properties within a postcode.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->addresses()->propertiesCountByPostcode('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```