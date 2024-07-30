<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // You should add your actual password here
$dbname = "uni_study";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
