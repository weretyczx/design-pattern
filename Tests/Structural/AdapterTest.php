<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use Pattern\Structural\Adapter\CloudStorage;
use Pattern\Structural\Adapter\SDK\AwsSDKAdapter;
use Pattern\Structural\Adapter\SDK\AzureSDKAdapter;

Class AdapterTest extends TestCase
{
    public function test_cloudServ_get_azure()
    {
        $expect = 'Use Azure Cloud SDK Way Get File';

        $cloud = new CloudStorage(new AzureSDKAdapter);

        $this->assertEquals($expect, $cloud->getFile());
    }

    public function test_cloudServ_get_aws()
    {
        $expect = 'Use AWS Cloud SDK Way Get File';

        $cloud = new CloudStorage(new AwsSDKAdapter);

        $this->assertEquals($expect, $cloud->getFile());
    }
}