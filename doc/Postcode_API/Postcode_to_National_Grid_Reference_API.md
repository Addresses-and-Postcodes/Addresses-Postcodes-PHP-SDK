## Postcode to National Grid Reference API

[Back to the doc](../README.md)

#### Description

Shows the status of the assigned grid reference.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToNationalGridReferenceAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```