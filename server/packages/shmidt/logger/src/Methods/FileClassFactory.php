<?php

namespace Shmidt\Logger\Methods;

use Shmidt\Logger\SingleTon;

class FileClassFactory extends SingleTon implements MethodInterfaceFactory
{
    protected $fileHandler;
    protected function __construct()
    {
        $file = '/' . '/storage/logs/' . date('Y-m-d') . '.txt';
        $this->fileHandler = fopen($_SERVER['DOCUMENT_ROOT'] . $file, 'a+');
    }
//    protected function __destruct()
//    {
//        fclose($this->fileHandler);
//    }

    public function writeLog($level, $message)
    {
        $date = date('Y-m-d G:i:s');
        $stringLog = $date . ' ' . $level . ' ' . print_r($message, true) . "\n";
        fwrite($this->fileHandler, $stringLog);
    }
}
