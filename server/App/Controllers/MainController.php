<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\MainModel;
use Shmidt\Logger\Logger;

class MainController extends BaseController
{
    public function index()
    {
//        $mainModel = MainModel::getAll();
//
//        echo $mainModel;
        Logger::log('Log information');
        Logger::error('Error!!');
        echo __CLASS__ . ' ' . __METHOD__;
//        return getView('home_page', []);
    }

}
