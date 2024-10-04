<?php

$host = 'localhost';
$db = 'employee_management'; 
$user = 'root';
$pass = ''; 


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
