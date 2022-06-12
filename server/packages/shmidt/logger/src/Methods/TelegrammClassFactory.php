<?php

namespace Shmidt\Logger\Methods;

use Shmidt\Logger\SingleTon;

class TelegrammClassFactory implements MethodInterfaceFactory
{
    protected string $token = '';
    protected function __construct()
    {
        echo 'Telegramm';
    }

    public function writeLog($level, $message)
    {
        $connect = new Client('' . $level . $message);
    }
}
