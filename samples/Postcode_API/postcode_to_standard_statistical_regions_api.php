<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('1616589158-361070052-462388701-1635564164');
$output = $client->postcodeAPI()->PostcodeToStandardStatisticalRegionsAPI('ab101ab');

echo '<pre>';
print_r($output);
echo '</pre>';