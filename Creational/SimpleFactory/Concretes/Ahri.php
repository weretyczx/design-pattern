<?php

namespace Pattern\Creational\SimpleFactory\Concretes;

use Pattern\Creational\SimpleFactory\Contracts\Abilities;

class Ahri implements Abilities
{
    public function passive(): string
    {
        return '銷魂';
    }

    public function q(): string
    {
        return '幻玉';
    }

    public function w(): string
    {
        return '魅火';
    }

    public function e(): string
    {
        return '傾城';
    }

    public function r(): string
    {
        return '飛仙';
    }
}