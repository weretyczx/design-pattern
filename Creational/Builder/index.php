<?php

require '../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

use Pattern\Creational\Builder\AsusESC300G4Builder;
use Pattern\Creational\Builder\Computer;
use Pattern\Creational\Builder\Director;
use Pattern\Creational\Builder\MSIVortexG258REBuilder;
// 如何組裝出一個物件


// 對象的生產需要複雜的初始化，比如給一大堆類成員屬性賦初值，設置一下其他的系統環境變數。使用建造者模式可以將這些初始化工作封裝起來。

// 對象的生成時可根據初始化的順序或數據不同，而生成不同角色。
$msibuilder = new MSIVortexG258REBuilder(new Computer);
$asusbuilder = new AsusESC300G4Builder(new Computer);

$msi  = (new Director($msibuilder))->buildUp();
$asus = (new Director($asusbuilder))->buildUp();

d($msi,$asus);
