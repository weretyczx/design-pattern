<?php

namespace Pattern\Creational\AbstractFactory\Apple;

use Pattern\Creational\AbstractFactory\Contracts\NoteBook13Inch;

class MacPro implements NoteBook13Inch
{
    public function build()
    {
        return '組裝 MacPro';
    }
}