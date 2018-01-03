<?php

require '../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

use Pattern\Creational\Singleton\Database;


$db = Database::getInstance();
echo $db->query('select * from table');

$db = Database::getInstance();
echo $db->query('select * from table');

$db = Database::getInstance();
echo $db->query('select * from table');

$db->close();


