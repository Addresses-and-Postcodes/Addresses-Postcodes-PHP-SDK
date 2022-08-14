## Get area boundary path

[Back to the navigation](README.md)

#### Description

Retrieve a list of coordinates to produce a polygon around the postcode area.

```php
<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->boundaries()->getAreaBoundaryPath('AB');

echo '<pre>';
print_r($output);
echo '</pre>';
```