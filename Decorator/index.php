<?php

require '../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

use Pattern\Decorator\Burger;
use Pattern\Decorator\Decorators\Beef;
use Pattern\Decorator\Decorators\Lettuce;
use Pattern\Decorator\Decorators\Cheese;

$burger_beef = new Cheese(new Lettuce(new Beef(new Burger)));
$double_cheese = new Cheese(new Cheese(new Beef(new Burger)));

echo '招牌牛肉堡<br>';
echo '材料有'. $burger_beef->description(). '<br>';
echo '共'. $burger_beef->costs();

echo '<br><br>';

echo 'double cheese 牛肉堡<br>';
echo '材料有'. $double_cheese->description(). '<br>';
echo '共'. $double_cheese->costs();
