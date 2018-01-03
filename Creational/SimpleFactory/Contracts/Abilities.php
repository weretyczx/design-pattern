<?php

namespace Pattern\Creational\SimpleFactory\Contracts;

interface Abilities
{
    public function passive(): string;

    public function q(): string;

    public function w(): string;

    public function e(): string;

    public function r(): string;
}