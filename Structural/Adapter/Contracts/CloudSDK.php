<?php

namespace Pattern\Structural\Adapter\Contracts;

interface CloudSDK
{
    public function getFile();

    public function uploadedFile();

    public function deletedFile();
}