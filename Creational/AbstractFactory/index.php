<?php

require '../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

use Pattern\Creational\AbstractFactory\Apple\AppleFactory;
use Pattern\Creational\AbstractFactory\Asus\AsusFactory;


$instance = 'asus';


switch ($instance) {
    case 'apple': $instance = new AppleFactory(); break;
    case 'asus':  $instance = new AsusFactory();  break;
}


echo $notebook = $instance->createNoteBook()->build();
echo '<br>';
echo $instance->createCharging()->create();
