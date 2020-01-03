<?php
$host = "localhost";
$user_name = "root";
$db_password = "";
$db_name = "my_db";

$conn = mysqli_connect($host, $user_name, $db_password, $db_name);


if (!$conn) {
    die("Connection Error:" . mysqli_connect_error());
}
