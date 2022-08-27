<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->addresses()->propertiesCountByRadius('51.478302', '-2.498105', '100000');

echo '<pre>';
print_r($output);
echo '</pre>';
