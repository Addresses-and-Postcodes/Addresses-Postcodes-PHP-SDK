## Get sector count & path


[Back to the doc](../README.md)

#### Description

Retrieve a count of properties within a polygon and the polygon coordinates.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->sectors()->getSectorCountAndPath('BS15 4');

echo '<pre>';
print_r($output);
echo '</pre>';
```