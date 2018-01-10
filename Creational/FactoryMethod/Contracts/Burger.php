<?php

namespace Pattern\Creational\FactoryMethod\Contracts;

interface Burger
{
    public function price() : int;

    public function name() : string;
}