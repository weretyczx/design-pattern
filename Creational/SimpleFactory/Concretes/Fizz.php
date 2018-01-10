<?php

namespace Pattern\Creational\SimpleFactory\Concretes;

use Pattern\Creational\SimpleFactory\Contracts\Abilities;

class Fizz implements Abilities
{
    public function passive(): string
    {
        return '靈巧海族';
    }

    public function q(): string
    {
        return '現撈海膽';
    }

    public function w(): string
    {
        return '海神三叉戟';
    }

    public function e(): string
    {
        return '愛玩小飛 / 調皮小飛';
    }

    public function r(): string
    {
        return '海之霸主';
    }
}