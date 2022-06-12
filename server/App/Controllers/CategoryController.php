<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use Shmidt\Logger\Logger;
use Shmidt\Message\Greeter;

class CategoryController extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $res = $categoryModel->findAll();

        return $this->view('Category/index', ['res' => $res]);

//        $g = new Greeter();
//        echo $g->greet('Sveta');

//        Logger::error('Hi Sveta');
//        Logger::error('Hi Sveta');
    }

    public function save()
    {
        try {
            $categoryModel = new CategoryModel();
            $categoryModel->insertOne($_POST);
            $this->redirect('http://localhost:8181/category');
        } catch (\Exception $exception) {
            echo 'Error';
        }
    }

    public function delete()
    {
        try {
            $categoryModel = new CategoryModel();
            $categoryModel->delete($_POST);
            $this->redirect('http://localhost:8181/category');
        } catch (\Exception $exception) {
            echo 'Error';
        }
    }
}
