<?php

require '../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

use Pattern\Creational\FactoryMethod\BeefBurgerFactory;

$factory = (new BeefBurgerFactory)->make();

echo $factory->name(),'<br>';
echo $factory->price(),'元';
