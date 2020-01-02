<?php
session_start();
if (isset($_POST["std_login"])) {
    foreach ($_POST as $key => $value) {
        $$key = $value;
    }
    require_once "db.php";
    $query = "SELECT * FROM login_information WHERE email='$email' AND
    password='$password'";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) == 1) {
        $_SESSION["logged_in"]="true";
        header("location:index.php");
    } else {
        $_SESSION["error_login"] = "Invalid Email or password";
        header("location:login.php");
    }
}
