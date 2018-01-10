<?php

namespace Pattern\Structural\Bridge;

use Pattern\Structural\Bridge\Contracts\Computer;

class MyComputer extends Computer
{
    public function useVga3DMode()
    {
        return $this->vga->use3DMode();
    }
}