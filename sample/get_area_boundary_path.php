<?php

require "bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$apiClient = new Client('1317582431-899674233-1600765198-702694870', true);
$output = $apiClient->boundaries()->getAreaBoundaryPath('AB');
dump($output);
