<?php

namespace Pattern\Structural\Decorator\Decorators;

use Pattern\Structural\Decorator\Decorators\IngredientsDecorator;

class Beef extends IngredientsDecorator
{
    protected $price = 40 ;

    protected $name = '牛肉';
}