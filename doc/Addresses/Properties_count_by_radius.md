## Properties count by radius

[Back to the doc](../README.md)

#### Description

Retrieve a count of properties within radius.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->addresses()->propertiesCountByRadius('1.234', '-2.394', '45');

echo '<pre>';
print_r($output);
echo '</pre>';
```