<?php

namespace Pattern\Creational\SimpleFactory\Factory;

use Pattern\Creational\SimpleFactory\Contracts\Abilities;

class JarvanIV implements Abilities
{
    public function passive(): string
    {
        return '戰爭律動';
    }

    public function q(): string
    {
        return '滅龍一擊';
    }

    public function w(): string
    {
        return '光盾庇護';
    }

    public function e(): string
    {
        return '帝國戰旗';
    }

    public function r(): string
    {
        return '浩劫降臨';
    }
}