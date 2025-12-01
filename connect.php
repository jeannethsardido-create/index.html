<?php
$servername = "localhost";
$username = "root";   // default phpMyAdmin username
$password = "";       // default phpMyAdmin password
$dbname = "mydatabase";  // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to database successfully!";
?>
