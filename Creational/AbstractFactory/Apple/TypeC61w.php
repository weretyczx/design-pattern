<?php

namespace Pattern\Creational\AbstractFactory\Apple;

use Pattern\Creational\AbstractFactory\Contracts\Accessories;

class TypeC61w implements Accessories
{
    public function create()
    {
        return '生產 Apple TypeC 61w 充電器';
    }
}