## Postcode to 2001 Census Area Statistics (CAS) Wards API.

[Back to the doc](../README.md)

#### Description

In processing 2001 Census data for publication, 18 2003 statistical wards were identified as sub- threshold i.e. the count of population and households fell below the threshold for creating OAs and for the non-disclosive release of Census data. These 18 sub-threshold wards were combined with seven "receiving" wards to form acceptably sized OAs and permit publication of data. The sub- threshold wards are not separately identified in the ONSPD and postcodes in these statistical wards have been assigned to their receiving ward. The resulting set of wards is known as CAS wards. Sub-threshold wards (those below the threshold for creating OAs and for the non- disclosive release of Census data) are not separately identified in this field and postcodes in these "statistical wards" have been assigned to their "receiving ward". The resulting set of wards is known as "CAS Wards". A pseudo code is included for Channel Island and Isle of Man. The field will otherwise be blank for postcodes with no grid reference.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeTo2001CensusAreaStatisticsWards('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```