<?php

namespace Pattern\Structural\Decorator\Decorators;

use Pattern\Structural\Decorator\Decorators\IngredientsDecorator;

class Cheese extends IngredientsDecorator
{
    protected $price = 10 ;

    protected $name = '起司';
}