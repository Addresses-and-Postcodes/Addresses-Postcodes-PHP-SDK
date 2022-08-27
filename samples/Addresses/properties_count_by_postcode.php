<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->addresses()->propertiesCountByPostcode('CB2 8BZ');

echo '<pre>';
print_r($output);
echo '</pre>';
