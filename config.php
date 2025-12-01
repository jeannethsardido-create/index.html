<?php
$host = "localhost";
$user = "root";   // XAMPP default user
$pass = "";       // XAMPP default password is empty
$db   = "portfolio_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
