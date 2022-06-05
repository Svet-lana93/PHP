<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $res = $categoryModel->findAll();
//        $one = $categoryModel->where('title', '=', 'www');
//        $insertOne = $categoryModel->insertOne(['id' => 4, 'title' => 'test title', 'description' => 'description test']);
//        $update = $categoryModel->update(['title' => 'test title23', 'description' => 'description test52'], ['id' => 4]);
//        $delete = $categoryModel->delete(['description' => 'description test52']);
//        $like = $categoryModel->like('description', 'd%');
//        $whereIn = $categoryModel->whereIn('description', ['dfg', 'test']);
//        $orderBy = $categoryModel->orderBy(['*'], ['title'=>'DESC', 'description'=>'ASC']);
//        $join = $categoryModel->join('INNER JOIN', 'categories', 'products', ['categories.id', 'products.name as productsName', 'products.price as productsPrice'], [[['categories', 'id'], ['products', 'id']], [['products', 'id'], ['1']]]);
//        echo '<pre>';
//        print_r($join);
//        echo '</pre>';

//        return __CLASS__ . ' ' . __METHOD__;
//        return $this->getView($this->route, $this->layout, $this->view);
        return $this->getView('category', 'Category', 'index');

    }
}
