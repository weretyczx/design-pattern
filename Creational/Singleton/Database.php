<?php

namespace Pattern\Creational\Singleton;

class Database
{
    private static $instance = null;

    public static $instance_count = 0;

    private function __construct()
    {
        echo 'PDO連線'. ++self::$instance_count .'個<br>';
    }

    public static function getInstance()
    {
        if(! self::$instance instanceof self){

            echo '建立連線';

            return self::$instance = new self();
        }
        echo '沿用連線<br>';

        return self::$instance;
    }

    public function close()
    {
        self::$instance = null;
        self::$instance_count = 0;
        echo '關閉連線';
    }

    public function query($sql)
    {
        return $sql.'<br>';
    }

    private function __clone()
    {
        // change to private method prevent clone
    }

    private function __wakeup()
    {
        // change to private method prevent unserialize()
    }


}