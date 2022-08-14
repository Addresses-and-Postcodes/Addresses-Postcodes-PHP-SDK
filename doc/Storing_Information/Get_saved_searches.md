## Get Saved Searches

[Back to the doc](../README.md)

#### Description

Get a list of all your saves searches - By polygon or radius.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->storingInformation()->getSavedSearches();

echo '<pre>';
print_r($output);
echo '</pre>';
```