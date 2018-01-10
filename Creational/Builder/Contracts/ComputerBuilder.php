<?php

namespace Pattern\Creational\Builder\Contracts;

use Pattern\Creational\Builder\Computer;

abstract class ComputerBuilder
{
    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function getComputer() : Computer
    {
        return $this->computer;
    }

    public abstract function setCpu();

    public abstract function setVga();

    public abstract function setDisk();

    public abstract function setPower();

}