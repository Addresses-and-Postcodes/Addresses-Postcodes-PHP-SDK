<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('1616589158-361070052-462388701-1635564164', true);
$output = $client->addresses()->searchForProperty('Aberdeen City Council', 'AB10 1AQ');

echo '<pre>';
print_r($output);
echo '</pre>';
