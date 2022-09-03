## Postcode to 2001 National UK Census Output Area Classification names API.

[Back to the doc](../README.md)

#### Description

The 2001 Census OAs were built from unit postcodes and constrained to 2003 ‘statistical’ wards, and they form the building bricks for defining higher level geographies. Pseudo codes are included for Channel Islands and Isle of Man. The field will otherwise be blank for postcodes with no grid reference. Includes OAC01, Supergroup, Group and Subgroup.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeTo2001NationalUKCensusOutputAreaClassificationNames('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```