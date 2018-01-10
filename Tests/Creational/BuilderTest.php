<?php

namespace Tests\Creational;

use PHPUnit\Framework\TestCase;
use Pattern\Creational\Builder\AsusESC300G4Builder;
use Pattern\Creational\Builder\Computer;
use Pattern\Creational\Builder\Contracts\ComputerBuilder;
use Pattern\Creational\Builder\Director;
use Pattern\Creational\Builder\MSIVortexG258REBuilder;

Class BuilderTest extends TestCase
{
    public function test_MSIVortexG258REBuilder_is_ComputerBuilder()
    {
        $expect = ComputerBuilder::class;

        $msibuilder = new MSIVortexG258REBuilder(new Computer);

        $this->assertInstanceOf($expect, $msibuilder);
    }

    public function test_AsusESC300G4Builder_is_ComputerBuilder()
    {
        $expect = ComputerBuilder::class;

        $msibuilder = new AsusESC300G4Builder(new Computer);

        $this->assertInstanceOf($expect, $msibuilder);
    }

    public function test_MSIVortexG258REBuilder_attr_have_set()
    {
        $msibuilder = new MSIVortexG258REBuilder(new Computer);
        $msi  = (new Director($msibuilder))->buildUp();

        $attrs = get_object_vars($msi);

        foreach ($attrs as $var => $value) {
            $this->assertNotNull($value);
        }
    }

    public function test_AsusESC300G4Builder_attr_have_set()
    {
        $msibuilder = new AsusESC300G4Builder(new Computer);
        $msi  = (new Director($msibuilder))->buildUp();

        $attrs = get_object_vars($msi);

        foreach ($attrs as $var => $value) {
            $this->assertNotNull($value);
        }
    }

}