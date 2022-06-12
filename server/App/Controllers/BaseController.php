<?php

namespace App\Controllers;

use Shmidt\Framework\Controllers\Controller;

class BaseController extends Controller
{
    public function redirect(string $url)
    {
        header('Location: ' . $url);
        exit;
    }
}
