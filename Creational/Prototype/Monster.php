<?php

namespace Pattern\Creational\Prototype;

use Pattern\Creational\Prototype\Attack;

class Monster
{
    public $atkObj;

    public function __construct(Attack $obj)
    {
        echo '初始化怪獸';

        $this->atkObj = $obj;
    }

    // 深複製
    public function __clone()
    {
        echo '深複製';
         $this->atkObj = clone $this->atkObj;
    }
}

