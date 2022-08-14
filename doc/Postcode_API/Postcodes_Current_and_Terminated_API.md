## Postcodes Current and Terminated API

[Back to the doc](../README.md)

#### Description

Contains all live and terminated (closed) postcodes within the UK.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodesCurrentAndTerminatedAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```