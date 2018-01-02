<?php

namespace Pattern\Decorator\Contracts;

interface Ingredients
{
    public function description():string;

    public function costs():int;
}