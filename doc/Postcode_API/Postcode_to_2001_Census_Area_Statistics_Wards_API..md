## Postcode to 2001 Census Area Statistics (CAS) Wards API.

[Back to the doc](../README.md)

#### Description

In processing 2001 Census data for publication, 18 2003 statistical wards were identified as sub- threshold i.e. the count of population and households fell below the threshold for creating OAs and for the non-disclosive release of Census data.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeTo2001NationalUKCensusOutputAreaClassificationNames('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```