## Postcode to Regions (RGN) (formerly Government Office Regions GOR) API

[Back to the doc](../README.md)

#### Description

The nine GORs were abolished on 1 April 2011 and are now known as "regions" for statistical purposes. They were the primary statistical subdivisions of England and also the areas in which the Government Offices for the Regions fulfilled their role. Each region covered a number of local authorities. The region code for each postcode. Pseudo codes are included for Wales, Scotland, Northern Ireland, Channel Island and Isle of Man. The field will be blank for postcodes in England with no grid reference.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToRegionsAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```