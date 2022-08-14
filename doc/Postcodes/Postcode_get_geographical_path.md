## Get the geographical path of a postcode.


[Back to the doc](../README.md)

#### Description

Retrieve the geographical path of a postcode.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodes()->postcodeGetGeographicalPath('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```