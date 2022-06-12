<?php

namespace Shmidt\Logger;

class SingleTon
{
    private static array $instance = [];
    protected function __construct(){}
    protected function __clone(){}

    public static function getInstance()
    {
        $subClass = static::class;
        if (!isset(self::$instance[$subClass])) {
            self::$instance[$subClass] = new static();
        }
        return self::$instance[$subClass];
    }
}
