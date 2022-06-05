<?php

namespace Shmidt\Framework\Controllers;

use Shmidt\Framework\Views\View;

abstract class Controller
{
    public $route = [];
    public $view;
    public $layout;
    public $data = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route[1];
    }

    public function getView()
    {
        $viewObj = new View($this->route, 'Category', $this->view);
        $viewObj->rendor($this->data);
    }
}
