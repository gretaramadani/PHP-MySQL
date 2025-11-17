<?php
session_start();

$name="root";
$email="";
$password="";
$repeatpassword="";
$server="localhost";
$dbname="db";

try {
	
	$conn =new PDO("mysql:host=$server;dbname=$dbname",$name,$email,$password,$repeatpassword);

} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}
 ?>