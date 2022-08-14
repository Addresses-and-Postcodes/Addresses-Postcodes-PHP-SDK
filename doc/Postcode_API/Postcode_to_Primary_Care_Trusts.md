## Postcode to Primary Care Trusts

[Back to the doc](../README.md)

#### Description

Postcodes on the ONSPD have been assigned PCO codes (England), LHB codes (Wales), CHP codes (Scotland), LCG codes (NI) or Primary Healthcare Directorate code (Isle of Man). Postcodes in the Channel Islands (for which there are no equivalent areas) have been assigned a pseudo code.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToPrimaryCareTrusts('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```