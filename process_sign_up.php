<?php
session_start();
if (isset($_POST["std_sign_up"])) {
    foreach ($_POST as $key => $value) {
        $$key = $value;
    }
    if ($password != $confirm_password) {
        $_SESSION["error_password"] = "Password and confirm password didn't match";
        header("location:sign_up.php");
        exit;
    }
    require_once "db.php";
    //checking for the already existance of email
    $query_check_email_existance = "SELECT * FROM login_information where email='$email'";
    $result = mysqli_query($conn, $query_check_email_existance);
    if (mysqli_num_rows($result) != 0) {
        $_SESSION["email_error"] = "Email you entered already exists";
        header("location:sign_up.php");
        exit;
    }

    $query = "INSERT INTO login_information (email,password) VALUES ('$email','$password')";
    $res = mysqli_query($conn, $query);
    if (isset($res) && $res != "") {
        $_SESSION["msj_sign_up"] = "Account Created Successfully,Login to proceed";
        header("location:login.php");
    }
} else {
    header("location:login.php");
}
