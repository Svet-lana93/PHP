<?php

namespace Shmidt\Logger\Methods;

use Shmidt\Logger\SingleTon;

class DBClassFactory extends SingleTon implements MethodInterfaceFactory
{

    protected function __construct()
    {
        echo 'db';
    }

    public function writeLog($level, $message)
    {
        //$pdo->insert()
    }
}
