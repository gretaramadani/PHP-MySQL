<?php

$host = "localhost";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host = $host; , $user, $password");
    $sql = "Create database";
    $conn->exec($sql);
    echo "Database is created";
}catch (Exception $e) {
    echo "Database not created";
}
?>