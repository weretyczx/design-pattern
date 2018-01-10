<?php

namespace Pattern\Creational\Builder;

use Pattern\Creational\Builder\Contracts\ComputerBuilder;

class Director
{
    protected $builder;

    public function __construct(ComputerBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildUp()
    {
        $this->builder->setDisk();
        $this->builder->setVga();
        $this->builder->setCpu();
        $this->builder->setPower();

        return $this->builder->getComputer();
    }

}