<?php

namespace Pattern\Creational\FactoryMethod;

use Pattern\Creational\FactoryMethod\Contracts\Burger;
use Pattern\Creational\FactoryMethod\Contracts\BurgerFactory;
use Pattern\Creational\FactoryMethod\BeefBurger;

class BeefBurgerFactory implements BurgerFactory
{
    public function make() : Burger
    {
        return new BeefBurger();
    }
}