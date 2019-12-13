<?php
session_start();

if (isset($_POST["signup_form"])) {
    require "../db.php";

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $date_of_birth = $_POST["date_of_birth"];
    $gender = $_POST["gender"];
    $phone_no = $_POST["phone_no"];
    $country = $_POST["country"];

    $query = "INSERT INTO users (first_name,last_name,email,date_of_birth,gender,
    mobile_number,country) VALUES ('$first_name','$last_name','$email',
    '$date_of_birth','$gender','$phone_no','$country')";

    $result = mysqli_query($conn, $query);

    if (isset($result)) {
        $_SESSION["msj"] = "Sign Up Success";
        mysqli_close($conn);
        header("location:signup.php");
    } else {
        $_SESSION["msj"] = "Error: " . $query . mysqli_error($conn);
        header("location:signup.php");
    }

} else {
    $_SESSION["msj"] = "Invalid Access";
    header("location:signup.php");
}
