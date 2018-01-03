<?php

namespace Tests\Creational;

use PHPUnit\Framework\TestCase;
use Pattern\Creational\Singleton\Database;

Class SingletonTest extends TestCase
{
    public function test_only_one_instance()
    {
        $expect = 1;

        $db = Database::getInstance();
        $result = Database::$instance_count;
        $db->close();

        $this->assertEquals($expect ,$result);
    }

    public function test_only_destory_instance()
    {
        $expect = 0;

        $db = Database::getInstance()->close();
        $result = Database::$instance_count;

        $this->assertEquals($expect , $result);
    }


}