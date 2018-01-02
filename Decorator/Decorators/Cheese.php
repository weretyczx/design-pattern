<?php

namespace Pattern\Decorator\Decorators;

use Pattern\Decorator\Decorators\IngredientsDecorator;

class Cheese extends IngredientsDecorator
{
    protected $price = 10 ;

    protected $name = '起司';
}