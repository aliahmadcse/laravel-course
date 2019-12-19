<?php
session_start();

if (isset($_GET["sid"])) {
    require_once "db.php";
    $sid = $_GET["sid"];
    $query = "DELETE FROM students where std_id='$sid'";
    $query_result = mysqli_query($conn, $query);
    if (isset($query_result)) {
        $_SESSION["msj"] = "Record deleted successfully";
        header("location:records.php");
    } else {
        $_SESSION["msj"] = "Some error occured";
        header("location:records.php");
    }
} else {
    $_SESSION["msj"] = "Invalid Access";
    header("location:records.php");
}
