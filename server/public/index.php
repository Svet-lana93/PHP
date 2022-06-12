<?php
require_once '../vendor/autoload.php';
//require_once '../packages/shmidt/framework/src/functions.php';
//spl_autoload_register(function ($class) {
//    print_r($class);
//
//    $file = '/var/www/html' . '/' . str_replace('\\', '/', $class) . '.php';
//
//    if (is_file($file)) {
//        require_once $file;
//    }
//});


define('URL', trim($_SERVER['QUERY_STRING'], '/'));
define('ROOT', dirname(__DIR__));
define('SERVER', str_replace('public', '', dirname(__DIR__)));

use Shmidt\Framework\Router;
use Symfony\Component\Dotenv\Dotenv;


$dotenv = new Dotenv();
$dotenv->load(SERVER . '/.env');

require_once '../routes/web.php';

Router::dispatch(URL);
