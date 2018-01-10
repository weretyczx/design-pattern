<?php

namespace Pattern\Creational\AbstractFactory\Asus;

use Pattern\Creational\AbstractFactory\Contracts\Accessories;

class TypeC45w implements Accessories
{
    public function create()
    {
        return '使用 Asus Type C45w 充電器';
    }
}