<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->addresses()->propertiesListByPostcode('AB101AB');

echo '<pre>';
print_r($output);
echo '</pre>';
