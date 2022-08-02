<?php

/**
 * --------------------------------
 * Include the composer Autoloader
 * --------------------------------
 */
$autoload = dirname(dirname(dirname(__DIR__))) . '/autoload.php';
if (!file_exists($autoload)) {
    $autoload = dirname(__DIR__) . '/vendor/autoload.php';
    if (!file_exists($autoload)) {
        echo "The 'vendor' folder is missing. You must run 'composer update' to resolve application dependencies.\nPlease see the README for more information.\n";
        exit(1);
    }
}
require $autoload;
