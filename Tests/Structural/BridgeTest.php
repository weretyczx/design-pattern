<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use Pattern\Structural\Bridge\AmdRadeonRX480;
use Pattern\Structural\Bridge\MyComputer;
use Pattern\Structural\Bridge\NvidiaGeForceGTX1070;

Class BridgeTest extends TestCase
{
    public function test_mycomputer_use_nvidia_vga()
    {
        $expect = '使用 Nvidia 3D 技術';

        $computer = new MyComputer(new NvidiaGeForceGTX1070);

        $this->assertEquals($expect, $computer->useVga3DMode());
    }

     public function test_mycomputer_use_amd_vga()
    {
        $expect = '使用 AMD 3D 技術';

        $computer = new MyComputer(new AmdRadeonRX480);

        $this->assertEquals($expect, $computer->useVga3DMode());
    }
}