<?php
require_once __DIR__ . '/databaseConnection.php';

/** @var $db Database */

$user = trim($_POST['user'] ?? '');
$review = trim($_POST['review'] ?? '');

if ($user !== '' && $review !== '') {
    $sqlResult = $db->insert('reviews',  [$user, $review],'user, review');
}
