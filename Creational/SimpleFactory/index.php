<?php

require '../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

use Pattern\Creational\SimpleFactory\LOLFactory;


$fizz = LOLFactory::make('Fizz');
echo 'Fizz (passive) '. $fizz->passive() .'<br>';
echo 'Fizz (Q) '. $fizz->q() .'<br>';
echo 'Fizz (w) '. $fizz->w() .'<br>';
echo 'Fizz (e) '. $fizz->e() .'<br>';
echo 'Fizz (r) '. $fizz->r() .'<br>';
echo '<br><br>';

$ahri = LOLFactory::make('Ahri');
echo 'Ahri (passive) '. $ahri->passive() .'<br>';
echo 'Ahri (Q) '. $ahri->q() .'<br>';
echo 'Ahri (w) '. $ahri->w() .'<br>';
echo 'Ahri (e) '. $ahri->e() .'<br>';
echo 'Ahri (r) '. $ahri->r() .'<br>';
echo '<br><br>';

$jarvanIV = LOLFactory::make('JarvanIV');
echo 'JarvanIV (passive) '. $jarvanIV->passive() .'<br>';
echo 'JarvanIV (Q) '. $jarvanIV->q() .'<br>';
echo 'JarvanIV (w) '. $jarvanIV->w() .'<br>';
echo 'JarvanIV (e) '. $jarvanIV->e() .'<br>';
echo 'JarvanIV (r) '. $jarvanIV->r() .'<br>';




