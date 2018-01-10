<?php

namespace Pattern\Creational\FactoryMethod;

use Pattern\Creational\FactoryMethod\Contracts\Burger;

class BeefBurger implements Burger
{
    public function price() : int
    {
        return 120;
    }

    public function name() : string
    {
        return '牛肉漢堡';
    }
}