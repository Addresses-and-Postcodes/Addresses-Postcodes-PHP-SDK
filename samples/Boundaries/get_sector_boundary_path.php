<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->boundaries()->getSectorBoundaryPath('BS15 4');

echo '<pre>';
print_r($output);
echo '</pre>';
