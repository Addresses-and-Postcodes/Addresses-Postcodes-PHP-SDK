## Postcode to Former Strategic Health Authority

[Back to the doc](../README.md)

#### Description

The health area code for the postcode. SHAs were abolished in England in 2013 but the codes remain as a ‘frozen’ geography. The field will otherwise be blank for postcodes with no grid reference. 36 areas across the UK.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToFormerStrategicHealthAuthority('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```