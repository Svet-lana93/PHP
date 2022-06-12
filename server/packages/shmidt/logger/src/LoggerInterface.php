<?php

namespace Shmidt\Logger;

interface LoggerInterface
{
    public static function log($context);
    public static function error($context);
    public static function method($class);
}
