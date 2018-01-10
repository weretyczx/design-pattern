<?php

namespace Tests\Creational;

use PHPUnit\Framework\TestCase;
use Pattern\Creational\Prototype\Attack;
use Pattern\Creational\Prototype\Monster;

Class PrototypeTest extends TestCase
{
    public function test_clone_a_Monster()
    {
        $monster = new Monster(new Attack);
        $monster_clone = clone $monster;

        $this->assertEquals($monster, $monster_clone);
    }

    public function test_deep_clone_Monster()
    {
        $monster = new Monster(new Attack);
        $monster_clone = clone $monster;

        $this->assertNotEquals(
            spl_object_hash($monster->atkObj),
            spl_object_hash($monster_clone->atkObj)
        );
    }
}