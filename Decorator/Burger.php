<?php

namespace Pattern\Decorator;

use Pattern\Decorator\Contracts\Ingredients;

class Burger implements Ingredients
{
    protected $price = 10;

    protected $name = '漢堡皮';

    public function description() : string
    {
        return $this->name;
    }

    public function costs(): int
    {
        return $this->price;
    }
}