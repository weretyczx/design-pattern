<?php

namespace Pattern\Creational\AbstractFactory\Contracts;

interface NoteBookFactory
{
    public function createNoteBook() : NoteBook13Inch;

    public function createCharging() : Accessories;
}