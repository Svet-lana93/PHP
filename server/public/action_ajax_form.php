<?php
$servername = 'a_level_nix_mysql';
$database = 'a_level_nix_mysql';
$username = 'root';
$password = 'cbece_gead-cebfa';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
$user = trim($_POST['user'] ?? '');
$review = trim($_POST['review'] ?? '');

if ($user !== '' && $review !== '') {
    $sql = 'INSERT INTO `reviews` (`user`, `review`)
                VALUES ("' . mysqli_real_escape_string($conn, $user) . '","' . mysqli_real_escape_string($conn, $review) . '")';
    if (mysqli_query($conn, $sql)) {
//        echo 'Data added successfully';
        header('Location: /');
        mysqli_close($conn);
        exit;
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
mysqli_close($conn);