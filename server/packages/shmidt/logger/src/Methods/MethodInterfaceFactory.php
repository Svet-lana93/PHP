<?php

namespace Shmidt\Logger\Methods;

interface MethodInterfaceFactory
{
    public function writeLog($level, $message);
}
