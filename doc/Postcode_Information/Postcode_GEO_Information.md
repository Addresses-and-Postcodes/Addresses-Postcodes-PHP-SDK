## Postcode GEO Information

[Back to the doc](../README.md)

#### Description

Returns latitude & longitude centroid for the postcode, County and town.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeInformation()->postcodeGEOInformation('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```