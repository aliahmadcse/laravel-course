<?php
session_start();
if (isset($_POST["student_form"])) {
    require_once "db.php";
    foreach ($_POST as $key => $value) {
        $$key = $value;
    }

    $insert_query = "INSERT INTO students (std_name,std_father_name,std_email,
        std_gender,std_country,std_mobile_number) VALUES ('$name','$father_name',
        '$email','$gender','$country','$mobile_number')";

    $result = mysqli_query($conn, $insert_query);
    mysqli_close($conn);

    if (isset($result)) {
        $_SESSION["msj"] = "Record Inserted Successfully";
        header("location:index.php");
    } else {
        $_SESSION["msj"] = "Error: " . $sql . "<br />" . mysqli_error($conn);
        header("location:index.php");
    }
} else {
    $_SESSION["msj"] = "Invalid Access";
    header("location:index.php");
}
