<?php

namespace Pattern\Creational\FactoryMethod\Contracts;

use Pattern\Creational\FactoryMethod\Contracts\Burger;

interface BurgerFactory
{
    public function make() : Burger;
}