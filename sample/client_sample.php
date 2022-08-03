<?php

require "bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\Client;

$apiClient = new Client();
dump($apiClient->todos()->first());
