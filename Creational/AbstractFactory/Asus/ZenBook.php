<?php

namespace Pattern\Creational\AbstractFactory\Asus;

use Pattern\Creational\AbstractFactory\Contracts\NoteBook13Inch;

class ZenBook implements NoteBook13Inch
{
    public function build()
    {
        return '生產 ZenBook';
    }
}