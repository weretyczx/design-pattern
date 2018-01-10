<?php

require '../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

// 創建類的對象的時候，如果初始化比較複雜，那就用原型模式
use Pattern\Creational\Prototype\Attack;
use Pattern\Creational\Prototype\Monster;

$atk = new Attack;
$m = new Monster($atk);
$m_clone = clone $m;

$objHash = spl_object_hash($m->atkObj);
$objCloneHash = spl_object_hash($m_clone->atkObj);

echo '深複製後Obj不在是參照'.
     "$objHash != $objCloneHash";




