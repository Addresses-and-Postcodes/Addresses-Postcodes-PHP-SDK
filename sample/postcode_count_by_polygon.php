<?php

require "bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('1616589158-361070052-462388701-1635564164', true);
$output = $client->postcodes()->postcodeCountByPolygon();

echo '<pre>';
print_r($output);
echo '</pre>';

// https://postcodes.test/api/v3/postcodes/total/by/path?key=1616589158-361070052-462388701-1635564164&path[0][lat]=1.234&path[0][lng]=-2.394&path[1][lat]=1.238&path[1][lng]=-2.040