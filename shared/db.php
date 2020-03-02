<?php

//class to handle database credentials and connectivity
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

    public function db_connect()
    {
        $this->conn = mysqli_connect($this->host, $this->db_user_name, $this->db_password, $this->db_name);
        if (!$this->conn) {
            die("Connection Error: " . mysqli_connect_error());
        }
        return $this->conn;
    }

    public function db_disconnect()
    {
        mysqli_close($this->conn);
    }
}

// creating an instance of Database class
$db = new Database('localhost', 'root', '', 'student_record_keeping');

// creating an connection
$conn = $db->db_connect();
