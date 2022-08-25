<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('1317582431-899674233-1600765198-702694870');
$output = $client->postcodeInformation()->postcodeGEOInformation('AB10 1AB');

echo '<pre>';
print_r($output);
echo '</pre>';
