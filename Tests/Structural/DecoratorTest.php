<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use Pattern\Structural\Decorator\Burger;
use Pattern\Structural\Decorator\Decorators\Beef;
use Pattern\Structural\Decorator\Decorators\Cheese;
use Pattern\Structural\Decorator\Decorators\Lettuce;

Class DecoratorTest extends TestCase
{
    public function test_Burger_description_should_漢堡皮()
    {
        $expect = '漢堡皮';

        $instances = new Burger();

        $this->assertEquals($expect, $instances->description());
    }

    public function test_Burger_costs_should_10()
    {
        $expect = 10;

        $instances = new Burger();

        $this->assertEquals($expect, $instances->costs());
    }

    public function test_BeefBurger_description_should_漢堡皮牛肉()
    {
        $expect = '漢堡皮,牛肉';

        $instances = new Beef(new Burger);

        $this->assertEquals($expect, $instances->description());
    }

    public function test_BeefBurger_costs_should_50()
    {
        $expect = (10 + 40);

        $instances = new Beef(new Burger);

        $this->assertEquals($expect, $instances->costs());
    }

    public function test_CheeseBurger_description_should_漢堡皮起司()
    {
        $expect = '漢堡皮,起司';

        $instances = new Cheese(new Burger);

        $this->assertEquals($expect, $instances->description());
    }

    public function test_CheeseBurger_costs_should_20()
    {
        $expect = (10 + 10);

        $instances = new Cheese(new Burger);

        $this->assertEquals($expect, $instances->costs());
    }

    public function test_LettuceBurger_description_should_漢堡皮生菜()
    {
        $expect = '漢堡皮,生菜';

        $instances = new Lettuce(new Burger);

        $this->assertEquals($expect, $instances->description());
    }

    public function test_LettuceBurger_costs_should_20()
    {
        $expect = (10 + 10);

        $instances = new Lettuce(new Burger);

        $this->assertEquals($expect, $instances->costs());
    }

    public function test_LettuceBurger_description_should_漢堡皮生菜起司()
    {
        $expect = '漢堡皮,生菜,起司';

        $instances = new Cheese(new Lettuce(new Burger));

        $this->assertEquals($expect, $instances->description());
    }

    public function test_LettuceBurger_costs_should_30()
    {
        $expect = (10 + 10 + 10);

        $instances = new Cheese(new Lettuce(new Burger));

        $this->assertEquals($expect, $instances->costs());
    }



}