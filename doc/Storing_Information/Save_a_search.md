## Save a Search

[Back to the doc](../README.md)

#### Description

Save a Polygon or Radius search to your account.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->storingInformation()->saveASearch([
    'name' => 'search-name',
    'endpoint' => '/api/v3/properties/total/by/radius'
]);

echo '<pre>';
print_r($output);
echo '</pre>';
```