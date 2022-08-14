## Postcode to Travel to Work Areas (TTWA) API

[Back to the doc](../README.md)

#### Description

TTWAs are used in labour market analysis and reflect reasonably self-contained zones in which the bulk of the resident population also work.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToTravelToWorkAreasAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```