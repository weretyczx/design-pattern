<?php

namespace Tests\Creational;

use PHPUnit\Framework\TestCase;
use Pattern\Creational\SimpleFactory\LOLFactory;

Class SimpleFactoryTest extends TestCase
{
    public function test_LoLFactory_get_fizz_passive()
    {
        $expect = '靈巧海族';

        $factory = LoLFactory::make('Fizz');

        $this->assertEquals($expect, $factory->passive());
    }

    public function test_LoLFactory_get_fizz_q()
    {
        $expect = '現撈海膽';

        $factory = LoLFactory::make('Fizz');

        $this->assertEquals($expect, $factory->q());
    }

    public function test_LoLFactory_get_fizz_w()
    {
        $expect = '海神三叉戟';

        $factory = LoLFactory::make('Fizz');

        $this->assertEquals($expect, $factory->w());
    }

    public function test_LoLFactory_get_fizz_e()
    {
        $expect = '愛玩小飛 / 調皮小飛';

        $factory = LoLFactory::make('Fizz');

        $this->assertEquals($expect, $factory->e());
    }

    public function test_LoLFactory_get_fizz_r()
    {
        $expect = '海之霸主';

        $factory = LoLFactory::make('Fizz');

        $this->assertEquals($expect, $factory->r());
    }



    public function test_LoLFactory_get_ahri_passive()
    {
        $expect = '銷魂';

        $factory = LoLFactory::make('Ahri');

        $this->assertEquals($expect, $factory->passive());
    }

    public function test_LoLFactory_get_ahri_q()
    {
        $expect = '幻玉';

        $factory = LoLFactory::make('Ahri');

        $this->assertEquals($expect, $factory->q());
    }

    public function test_LoLFactory_get_ahri_w()
    {
        $expect = '魅火';

        $factory = LoLFactory::make('Ahri');

        $this->assertEquals($expect, $factory->w());
    }

    public function test_LoLFactory_get_ahri_e()
    {
        $expect = '傾城';

        $factory = LoLFactory::make('Ahri');

        $this->assertEquals($expect, $factory->e());
    }

    public function test_LoLFactory_get_ahri_r()
    {
        $expect = '飛仙';

        $factory = LoLFactory::make('Ahri');

        $this->assertEquals($expect, $factory->r());
    }




    public function test_LoLFactory_get_JarvanIV_passive()
    {
        $expect = '戰爭律動';

        $factory = LoLFactory::make('JarvanIV');

        $this->assertEquals($expect, $factory->passive());
    }

    public function test_LoLFactory_get_JarvanIV_q()
    {
        $expect = '滅龍一擊';

        $factory = LoLFactory::make('JarvanIV');

        $this->assertEquals($expect, $factory->q());
    }

    public function test_LoLFactory_get_JarvanIV_w()
    {
        $expect = '光盾庇護';

        $factory = LoLFactory::make('JarvanIV');

        $this->assertEquals($expect, $factory->w());
    }

    public function test_LoLFactory_get_JarvanIV_e()
    {
        $expect = '帝國戰旗';

        $factory = LoLFactory::make('JarvanIV');

        $this->assertEquals($expect, $factory->e());
    }

    public function test_LoLFactory_get_JarvanIV_r()
    {
        $expect = '浩劫降臨';

        $factory = LoLFactory::make('JarvanIV');

        $this->assertEquals($expect, $factory->r());
    }
}