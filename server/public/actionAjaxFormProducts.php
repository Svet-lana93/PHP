<?php
require_once __DIR__ . '/databaseConnection.php';

/** @var $conn mysqli */

$productName = htmlspecialchars(trim($_POST['productName']));
$sort = $_POST['sort'];

$sqlQuery = 'SELECT * FROM products WHERE
                           LOWER(`name`) LIKE "' . strtolower(mysqli_real_escape_string($conn, $productName))  . '%"
                            ORDER BY ' . $sort;

if(!($queryResult = mysqli_query($conn, $sqlQuery))) {
    die('Invalid query: ' . mysqli_error($conn));
}

$products = mysqli_fetch_all($queryResult, MYSQLI_ASSOC);

header('Content-Type: application/json');
echo json_encode($products);
