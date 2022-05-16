<?php
require_once __DIR__ . '/databaseConnection.php';

/** @var $db Database */

$productName = trim($_POST['productName']);
$sort = $_POST['sort'];

$where = [];
if(!empty($productName)) {
    $where['name'] = $productName;
}

$queryResult = $db->select('products', $where, [$sort=>'ASC']);

header('Content-Type: application/json');
echo json_encode($queryResult);
