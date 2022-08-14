## Search for property

[Back to the doc](../README.md)

#### Description

Retrieve a property by building name or number and postcode.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->addresses()->searchForProperty('ABERDEEN CITY COUNCIL', 'ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```