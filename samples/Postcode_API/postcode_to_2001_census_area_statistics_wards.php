<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeAPI()->postcodeTo2001CensusAreaStatisticsWards('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';
