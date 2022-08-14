## Properties count by line polygon

[Back to the doc](../README.md)

#### Description

Retrieve a count of properties a set buffer from a line.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->addresses()->propertiesCountByLinePolygon([['lat' => 1.234, 'lng' => -2.394], ['lat' => 1.238, 'lng' => -2.040]], '45');

echo '<pre>';
print_r($output);
echo '</pre>';
```