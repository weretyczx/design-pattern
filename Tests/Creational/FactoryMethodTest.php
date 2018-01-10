<?php

namespace Tests\Creational;

use PHPUnit\Framework\TestCase;
use Pattern\Creational\FactoryMethod\BeefBurger;
use Pattern\Creational\FactoryMethod\BeefBurgerFactory;

Class FactoryMethodTest extends TestCase
{
    public function test_CharacterFactory_make()
    {
        $expect = BeefBurger::class;

        $result = (new BeefBurgerFactory)->make();

        $this->assertInstanceOf($expect ,$result);
    }

    public function test_CharacterFactory_price()
    {
        $expect = 120;

        $result = (new BeefBurgerFactory)->make()->price();

        $this->assertEquals($expect ,$result);
    }

        public function test_CharacterFactory_name()
    {
        $expect = '牛肉漢堡';

        $result = (new BeefBurgerFactory)->make()->name();

        $this->assertEquals($expect ,$result);
    }
}