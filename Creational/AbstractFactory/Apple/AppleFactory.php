<?php

namespace Pattern\Creational\AbstractFactory\Apple;

use Pattern\Creational\AbstractFactory\Apple\MacPro;
use Pattern\Creational\AbstractFactory\Apple\TypeC61w;
use Pattern\Creational\AbstractFactory\Contracts\Accessories;
use Pattern\Creational\AbstractFactory\Contracts\NoteBook13Inch;
use Pattern\Creational\AbstractFactory\Contracts\NoteBookFactory;

class AppleFactory implements NoteBookFactory
{
    public function createNoteBook() : NoteBook13Inch
    {
        return new MacPro();
    }

    public function createCharging() : Accessories
    {
        return new TypeC61w();
    }
}