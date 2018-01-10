<?php

namespace Tests\Creational;


use PHPUnit\Framework\TestCase;
use Pattern\Creational\AbstractFactory\Apple\AppleFactory;
use Pattern\Creational\AbstractFactory\Apple\MacPro;
use Pattern\Creational\AbstractFactory\Apple\TypeC61w;
use Pattern\Creational\AbstractFactory\Asus\AsusFactory;
use Pattern\Creational\AbstractFactory\Asus\TypeC45w;
use Pattern\Creational\AbstractFactory\Asus\ZenBook;

Class AbstractFactoryTest extends TestCase
{
    public function test_AppleFactory_createNoteBook()
    {
        $expect = MacPro::class ;

        $notebook = (new AppleFactory())->createNoteBook();
        $this->assertInstanceOf($expect ,$notebook);
    }

    public function test_AppleFactory_createCharging()
    {
        $expect = TypeC61w::class ;

        $charging = (new AppleFactory())->createCharging();

        $this->assertInstanceOf($expect ,$charging);

    }

    public function test_AsusFactory_createNoteBook()
    {
        $expect = ZenBook::class ;

        $charging = (new AsusFactory())->createNoteBook();

        $this->assertInstanceOf($expect, $charging);

    }

    public function test_AsusFactory_createCharging()
    {
        $expect = TypeC45w::class ;

        $charging = (new AsusFactory())->createCharging();

        $this->assertInstanceOf($expect, $charging);

    }


}
