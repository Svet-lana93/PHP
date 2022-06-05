<?php

namespace Shmidt\Framework\Views;

class View
{
    public $route = [];
    public $view;
    public $layout;

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;

        if ($layout == false) {
            $this->layout = null;
        } else {
            $this->layout = $layout;
        }

        $this->view = $view;
    }

    public function rendor($data)
    {
//        if ($data) {
//
//        }
        $fileView = SERVER . '/App/Views/' . $this->layout . '/' . $this->view . '.php';

        if (is_file($fileView)) {
//            dump(111);
            require $fileView;
        } else {
//            dump(222);
            echo 'File ' . $this->view . ' not found';
        }
    }
}
