## Get sector boundary path

[Back to the navigation](README.md)

#### Description

Retrieve a list of coordinates to produce a polygon around the postcode sector.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->boundaries()->getSectorBoundaryPath('BS15 4');

echo '<pre>';
print_r($output);
echo '</pre>';
```