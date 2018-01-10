<?php

namespace Pattern\Creational\AbstractFactory\Asus;

use Pattern\Creational\AbstractFactory\Asus\TypeC45w;
use Pattern\Creational\AbstractFactory\Asus\ZenBook;
use Pattern\Creational\AbstractFactory\Contracts\Accessories;
use Pattern\Creational\AbstractFactory\Contracts\NoteBook13Inch;
use Pattern\Creational\AbstractFactory\Contracts\NoteBookFactory;

class AsusFactory implements NoteBookFactory
{
    public function createNoteBook() : NoteBook13Inch
    {
        return new ZenBook();
    }

    public function createCharging() : Accessories
    {
        return new TypeC45w();
    }
}

