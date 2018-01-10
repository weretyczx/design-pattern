<?php

namespace Pattern\Structural\Bridge\Contracts;

abstract class Computer
{
    protected $vga;

    public function __construct(Vga $vga)
    {
        $this->vga = $vga;
    }

    public abstract function useVga3DMode();
}