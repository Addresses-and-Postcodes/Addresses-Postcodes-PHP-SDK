## Delete a Search

[Back to the doc](../README.md)

#### Description

Remove / hide a Polygon or Radius search to your account.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->storingInformation()->deleteSearch('1');

echo '<pre>';
print_r($output);
echo '</pre>';
```