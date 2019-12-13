<?php
session_start();
if (isset($_POST["std_form"])) {
    require "db.php";

    $name = $_POST["name"];
    $father_name = $_POST["fatherName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO students (std_name,std_father_name,std_email,
        std_gender,std_country,std_mobile_number) VALUES ('$name','$father_name',
        '$email','$gender','$country','$phone')";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    if (isset($result)) {
        $_SESSION["msj"] = "Record Inserted Successfully";
        mysqli_close($conn);
        header("location:index.php");
    } else {
        $_SESSION["msj"] = "Error: " . $sql . "<br />" . mysqli_error($conn);
        header("location:index.php");
    }
} else {
    // echo "Invalid access";
    $_SESSION["msj"] = "Invalid Access";
    header("location:index.php");
}
