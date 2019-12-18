<?php

session_start();

if (isset($_POST["sid"])) {
    require_once "db.php";
    $name = $_POST["name"];
    $father_name = $_POST["fatherName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];
    $sid = $_POST["sid"];

    $query =  "UPDATE students SET std_name='$name', std_father_name='$father_name',
std_email='$email',std_mobile_number='$phone',std_gender='$gender',
std_country='$country' WHERE std_id='$sid' ";

    $query_result = mysqli_query($conn, $query);
    if (isset($query_result)) {
        $_SESSION["msj"] = "Record Updated Successfully";
        header("location:records.php");
    } else {
        $_SESSION["msj"] = "Something wrong in updating the record";
        header("location:records.php");
    }
} else {
    $_SESSION["msj"] = "Invalid Access";
    header("location:records.php");
}
