<?php
require_once __DIR__ . '/databaseConnection.php';

/** @var $conn mysqli */

$user = trim($_POST['user'] ?? '');
$review = trim($_POST['review'] ?? '');

if ($user !== '' && $review !== '') {
    $sql = 'INSERT INTO `reviews` (`user`, `review`)
                VALUES ("' . mysqli_real_escape_string($conn, $user) . '","' . mysqli_real_escape_string($conn, $review) . '")';
    if (mysqli_query($conn, $sql)) {
        echo 'Data added successfully';
        mysqli_close($conn);
        exit;
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

mysqli_close($conn);
