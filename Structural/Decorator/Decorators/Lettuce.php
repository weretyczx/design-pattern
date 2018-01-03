<?php

namespace Pattern\Structural\Decorator\Decorators;

use Pattern\Structural\Decorator\Decorators\IngredientsDecorator;

class Lettuce extends IngredientsDecorator
{
    protected $price = 10;

    protected $name = '生菜';
}