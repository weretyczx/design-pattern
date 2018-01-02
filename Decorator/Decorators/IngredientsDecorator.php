<?php

namespace Pattern\Decorator\Decorators;

use Pattern\Decorator\Contracts\Ingredients;

abstract class IngredientsDecorator implements Ingredients
{
    protected $decorator;

    protected $price = 0;

    protected $name = '材料名稱';

    public function __construct(Ingredients $decorator)
    {
        $this->decorator = $decorator;
    }

    public function description() : string
    {
        return $this->decorator->description().','. $this->name;
    }


    public function costs() : int
    {
        return $this->decorator->costs() + $this->price;
    }

}