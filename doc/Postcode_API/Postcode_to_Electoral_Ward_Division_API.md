## Postcode to Electoral Ward / Division API

[Back to the doc](../README.md)

#### Description

Postcode to Electoral Ward / Division API

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToElectoralWardDivisionAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```