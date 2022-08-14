## Postcode to London Borough API

[Back to the doc](../README.md)

#### Description

There are 33 boroughs in London (Includes the City of London which is officially a separate entity despite being located in the centre of London). We’ve reversed engineered ONS data to identify the postcodes that represent each borough.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToLondonBoroughAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```