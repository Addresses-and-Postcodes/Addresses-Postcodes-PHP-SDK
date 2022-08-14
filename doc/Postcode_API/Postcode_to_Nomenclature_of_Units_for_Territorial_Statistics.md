## Postcode to Nomenclature of Units for Territorial Statistics (NUTS)

[Back to the doc](../README.md)

#### Description

NUTS is a hierarchical classification of spatial units that provides a breakdown of the European Union’s territory for producing regional statistics that are comparable across the Union.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToNomenclatureofUnitsforTerritorialStatistics('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```