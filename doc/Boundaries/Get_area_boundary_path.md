## Get area boundary path

[Back to the doc](../README.md)

#### Description

Retrieve a list of coordinates to produce a polygon around the postcode area.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->boundaries()->getAreaBoundaryPath('AB');

echo '<pre>';
print_r($output);
echo '</pre>';
```