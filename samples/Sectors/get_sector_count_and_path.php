<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('API_KEY');
$output = $client->sectors()->getSectorCountAndPath('BS15 4');

echo '<pre>';
print_r($output);
echo '</pre>';
