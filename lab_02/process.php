<?php
require "db.php";

$name = $_POST["name"];
$father_name = $_POST["fatherName"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$country = $_POST["country"];
$gender = $_POST["gender"];

$sql = "INSERT INTO `students` (`std_name`,`std_father_name`,`std_email`,
`std_gender`,`std_country`,`std_mobile_number`) VALUES ('$name','$father_name',
'$email','$gender','$country','$phone')";

if ($conn->query($sql)) {
    echo "Inserted success!";
} else {
    echo $conn->error;
}
