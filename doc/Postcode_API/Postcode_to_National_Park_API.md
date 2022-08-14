## PPostcode to National Park API

[Back to the doc](../README.md)

#### Description

National parks are designed to conserve the natural beauty and cultural heritage of areas of outstanding landscape value, and to promote public understanding and enjoyment of these areas.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToNationalPark('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```