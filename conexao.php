<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "brasil";

$conn = new mysqli($hostname, $user, $password, $database);


    if($conn->connect_errno) {
        die("Falha! (" . $conn->connect_errno .")" . $conn->connect_error);
    }

?>