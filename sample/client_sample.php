<?php

require "bootstrap.php";

use AddressesAndPostcodes\Lookup\PHP\SDK\ApiClient;

$apiClient = new ApiClient();
dump($apiClient->todos()->first());
