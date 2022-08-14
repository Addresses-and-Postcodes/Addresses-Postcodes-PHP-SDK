## Get sector count & path


[Back to the doc](../README.md)

#### Description

Retrieve a count of postcodes within a polygon.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodes()->postcodeCountByPolygon([['lat' => 1.234, 'lng' => -2.394], ['lat' => 1.238, 'lng' => -2.040]]);

echo '<pre>';
print_r($output);
echo '</pre>';
```