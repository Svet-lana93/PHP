<?php
require_once __DIR__ . '/databaseConnection.php';

/** @var $db Database */

$user = trim($_POST['user'] ?? '');
$review = trim($_POST['review'] ?? '');

if ($user !== '' && $review !== '') {
    $db->insert('reviews', ['user' => $user, 'review' => $review]);
}
