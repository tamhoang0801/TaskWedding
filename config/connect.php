<?php 
$username = "Database";
$password = "data@0801";
$hostname = "localhost";
$database = "test";
$conn = new PDO ("mysql:host=$hostname;dbname=$database;charset=utf8mb4",
    "$username",
    "$password");

if(!$conn){
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

?>