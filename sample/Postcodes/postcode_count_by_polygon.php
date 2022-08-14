<?php

require "../bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$client = new Client('1616589158-361070052-462388701-1635564164', true);
$output = $client->postcodes()->postcodeCountByPolygon([['lat' => 1.234, 'lng' => -2.394], ['lat' => 1.238, 'lng' => -2.040]]);

echo '<pre>';
print_r($output);
echo '</pre>';
