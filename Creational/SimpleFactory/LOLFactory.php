<?php

namespace Pattern\Creational\SimpleFactory;

use Pattern\Creational\SimpleFactory\Contracts\Abilities;
use Pattern\Creational\SimpleFactory\Factory\Ahri;
use Pattern\Creational\SimpleFactory\Factory\Fizz;
use Pattern\Creational\SimpleFactory\Factory\JarvanIV;

class LOLFactory
{
    public static function make($character): Abilities
    {
        switch ($character) {
            case 'Fizz':     $character = new Fizz(); break;
            case 'Ahri':     $character = new Ahri(); break;
            case 'JarvanIV': $character = new JarvanIV(); break;
            default:
                throw new Exception('沒有此英雄角色');
                break;
        }

        return $character;
    }
}