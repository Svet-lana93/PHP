<?php
use Shmidt\Framework\Router;

use App\Controllers\MainController;
use App\Controllers\CategoryController;
use App\Controllers\ArticleController;

Router::add('^$', [MainController::class, 'index']);
Router::add('^category$', [CategoryController::class, 'index']);
Router::add('article', [ArticleController::class, 'index']);

Router::add('^category/save$', [CategoryController::class, 'save']);
Router::add('^category/delete$', [CategoryController::class, 'delete']);
