<?php
$servername = 'a_level_nix_mysql';
$database = 'a_level_nix_mysql';
$username = 'root';
$password = 'cbece_gead-cebfa';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}