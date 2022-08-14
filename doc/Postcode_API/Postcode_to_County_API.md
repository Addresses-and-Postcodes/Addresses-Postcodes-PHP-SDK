## Postcode to County API

[Back to the doc](../README.md)

#### Description

The current county to which the postcode has been assigned.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToCountyAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```