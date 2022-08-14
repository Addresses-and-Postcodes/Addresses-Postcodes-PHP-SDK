## Postcode to European Electoral Regions (EER) API

[Back to the doc](../README.md)

#### Description

EERs are as defined in the European Parliamentary Elections Bill (Bill 65, 1997) to amend the European Parliamentary Elections Act 1978 so as to alter the method used in Great Britain for electing Members of the European Parliament.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToEuropeanElectoralRegionsAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```