<?php

namespace Pattern\Structural\Adapter;

use Pattern\Structural\Adapter\Contracts\CloudSDK;

class CloudStorage
{
    private $sdk;

    public function __construct(CloudSDK $cloud)
    {
        $this->sdk = $cloud;
    }

    public function getFile()
    {
        return $this->sdk->getFile();
    }

    public function uploadedFile()
    {
        return $this->sdk->uploadedFile();
    }

    public function deletedFile()
    {
        return $this->sdk->deletedFile();
    }
}