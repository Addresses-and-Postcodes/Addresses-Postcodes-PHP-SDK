## Postcode to Westminster Parliamentary Constituency API

[Back to the doc](../README.md)

#### Description

England and Wales - Parliamentary constituencies relate to those defined by the Parliamentary Constituencies (England) Order 2007, the Parliamentary Constituencies (England) (Amendment) Order 2008 and the Parliamentary Constituencies (Wales) (Amendment) Order 2008, and which came into effect at the May 2010 General Election.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToWestminsterParliamentaryConstituencyAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
```