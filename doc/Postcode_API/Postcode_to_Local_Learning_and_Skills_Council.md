## Postcode to Local Learning and Skills Council (LLSC)/ Dept. of Children, Education, Lifelong Learning and Skills (DCELLS)/ Enterprise Region (ER) API

[Back to the doc](../README.md)

#### Description

The LLSC (England), DCELLS (Wales) or ER (Scotland) code for each postcode. Pseudo codes are included for Northern Ireland, Channel Islands and Isle of Man. The field will otherwise be blank for postcodes with no grid reference.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToLocalLearningSkillsCouncil('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```