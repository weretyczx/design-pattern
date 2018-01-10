<?php

namespace Pattern\Creational\Builder;

use Pattern\Creational\Builder\Computer;
use Pattern\Creational\Builder\Contracts\ComputerBuilder;

class AsusESC300G4Builder extends ComputerBuilder
{
    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function setCpu()
    {
        $this->computer->cpu = 'Intel Core i7-7700';
    }

    public function setDisk()
    {
        $this->computer->disk = '256GB NVMe SSD +1TB (SATA) 7200rpm';
    }

    public function setVga()
    {
        $this->computer->vga = 'NVIDIA M2000 4GB';
    }

    public function setPower()
    {
        $this->computer->power = '500W';
    }


}