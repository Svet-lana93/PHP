<?php

namespace Shmidt\Logger;

class Logger implements LoggerInterface
{

    public static function log($context)
    {
        self::method(require 'config/log.php')->writeLog(__FUNCTION__, $context);
    }

    public static function error($context)
    {
        self::method(require 'config/log.php')->writeLog(__FUNCTION__, $context);
    }

    public static function method($class)
    {
        $listenerClass = 'Shmidt\\Logger\\Methods\\' . ucfirst($class) . 'ClassFactory';
        if (class_exists($listenerClass)) {
            return $listenerClass::getInstance();
        } else {
            exit('This class does not exist! ' . ucfirst($class)  . "\n" . $listenerClass);
        }
    }
}
