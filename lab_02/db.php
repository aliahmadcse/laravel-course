<?php
$host = "localhost";
$user_name = "root";
$password = "";
$db_name = "my_db";

$conn = mysqli_connect($host, $user_name, $password, $db_name);

if (!$conn) {
    die("Connection Error: " . mysqli_connect_error());
}
