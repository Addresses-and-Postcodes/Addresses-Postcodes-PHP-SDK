## Properties count by Polygon

[Back to the doc](../README.md)

#### Description

Retrieve a count of properties within a polygon.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->addresses()->propertiesCountByPolygon([['lat' => 1.234, 'lng' => -2.394], ['lat' => 1.238, 'lng' => -2.040]]);

echo '<pre>';
print_r($output);
echo '</pre>';
```