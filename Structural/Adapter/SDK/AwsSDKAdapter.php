<?php

namespace Pattern\Structural\Adapter\SDK;

use Pattern\Structural\Adapter\Contracts\CloudSDK;

class AwsSDKAdapter implements CloudSDK
{
    public function getFile()
    {
        return 'Use AWS Cloud SDK Way Get File';
    }

    public function uploadedFile()
    {
        return 'Use AWS Cloud SDK Way Uploaded File';
    }

    public function deletedFile()
    {
        return 'Use AWS Cloud SDK Way Delete File';
    }
}
