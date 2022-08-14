## Postcode to Local Authority District

[Back to the doc](../README.md)

#### Description

Postcode to Local Authority District

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToLocalAuthorityDistrict('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```