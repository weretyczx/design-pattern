<?php

namespace Pattern\Structural\Bridge;

use Pattern\Structural\Bridge\Contracts\Vga;

class NvidiaGeForceGTX1070 implements Vga
{
    public function use3DMode()
    {
        return '使用 Nvidia 3D 技術';
    }
}