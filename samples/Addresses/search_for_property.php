<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->addresses()->searchForProperty('Aberdeen City Council', 'AB10 1AQ');

echo '<pre>';
print_r($output);
echo '</pre>';
