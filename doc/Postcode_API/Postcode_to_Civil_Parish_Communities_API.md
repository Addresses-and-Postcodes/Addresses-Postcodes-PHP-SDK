## Postcode to Civil Parish (England), Communities (Wales) API

[Back to the doc](../README.md)

#### Description

endpoint #6

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToCivilParishCommunitiesAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```