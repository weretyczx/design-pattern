<?php

namespace Pattern\Structural\Adapter\SDK;

use Pattern\Structural\Adapter\Contracts\CloudSDK;

class AzureSDKAdapter implements CloudSDK
{
    public function getFile()
    {
        return 'Use Azure Cloud SDK Way Get File';
    }

    public function uploadedFile()
    {
        return 'Use Azure Cloud SDK Way Uploaded File';
    }

    public function deletedFile()
    {
        return 'Use Azure Cloud SDK Way Delete File';
    }
}