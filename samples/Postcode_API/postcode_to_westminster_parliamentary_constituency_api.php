<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeToWestminsterParliamentaryConstituencyAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
