<?php

use Pattern\Structural\Bridge\AmdRadeonRX480;
use Pattern\Structural\Bridge\MyComputer;
use Pattern\Structural\Bridge\NvidiaGeForceGTX1070;

require '../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

$nvidia_computer = new MyComputer(new NvidiaGeForceGTX1070);
$amd_computer =  new MyComputer(new AmdRadeonRX480);


echo $nvidia_computer->useVga3DMode();
echo "<br>";
echo $amd_computer->useVga3DMode();

// d($nvidia_computer,$amd_computer);

