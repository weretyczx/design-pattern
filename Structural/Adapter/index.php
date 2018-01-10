<?php

require '../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

use Pattern\Structural\Adapter\SDK\AwsSDKAdapter;
use Pattern\Structural\Adapter\CloudStorage;


$adapter = new AwsSDKAdapter();
$storage = new CloudStorage($adapter);

d($storage->getFile());