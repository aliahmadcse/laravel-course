<?php

class Database
{
    private $conn;
    private $host;
    private $db_user_name;
    private $db_password;
    private $db_name;

    public function __construct($host, $db_user_name, $db_password, $db_name)
    {
        $this->conn = "";
        $this->host = $host;
        $this->db_user_name = $db_user_name;
        $this->db_password = $db_password;
        $this->db_name = $db_name;
    }
}
$host = "localhost";
$user_name = "root";
$db_password = "";
$db_name = "student_record_keeping";

$conn = mysqli_connect($host, $user_name, $db_password, $db_name);


if (!$conn) {
    die("Connection Error:" . mysqli_connect_error());
}
