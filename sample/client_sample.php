<?php

require "bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$apiClient = new Client('1616589158-361070052-462388701-1635564164');
$apiClient->enableErrorHandler(); // Enable PHP Error Handler.
$output = $apiClient->boundaries()->getAreaBoundaryPath('ABBBBBBB');
dump($output);
