<?php

namespace Pattern\Structural\Bridge;

use Pattern\Structural\Bridge\Contracts\Vga;

class AmdRadeonRX480 implements Vga
{
    public function use3DMode()
    {
        return '使用 AMD 3D 技術';
    }
}