<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->postcodeInformation()->postcodeGEOInformation('AB10 1AB');

echo '<pre>';
print_r($output);
echo '</pre>';
