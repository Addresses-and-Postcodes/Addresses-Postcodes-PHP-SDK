## Postcode to NHS England Regions (NHS ER) API

[Back to the doc](../README.md)

#### Description

NHSERs (formerly NHS Commissioning Regions - NHS CR) are sub-divisions of the NHS commissioning board. There are four NHS ERs in England and they were renamed from NHS CRs in May 2017. The NHS CRs were formed on 1 April 2013, replacing pan SHAs, and are responsible for providing clinical and professional leadership at sub-national level. They are also responsible for the co-ordination of planning, operational management and emergency preparedness at sub-national level and undertaking direct commissioning functions and processes.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToNHSEnglandRegionsAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```