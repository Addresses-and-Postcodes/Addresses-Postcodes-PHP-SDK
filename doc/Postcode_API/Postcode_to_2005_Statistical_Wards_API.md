## Postcode to 2005 Statistical Wards API

[Back to the doc](../README.md)

#### Description

"Statistical" wards were those electoral wards promulgated in Statutory Instruments by the end of a calendar year and implemented for statistical purposes on 1 April in the following year, irrespective of the year of statutory operation.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeTo2005StatisticalWardsAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```