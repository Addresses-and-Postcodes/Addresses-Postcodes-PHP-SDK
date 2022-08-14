## Postcode to UK Country Names & Codes API

[Back to the doc](../README.md)

#### Description

The code for the appropriate country (i.e. one of the four constituent countries of the UK or Crown dependencies - the Channel Islands or the Isle of Man) to which each postcode is assigned.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToUKCountryNamesCodesAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```