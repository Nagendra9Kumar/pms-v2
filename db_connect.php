<?php

// Enable error reporting for development
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);//
//error_reporting(E_ALL);

// Create connection to the MySQL database
$host = $_ENV['AZURE_MYSQL_HOST'] ?? "localhost";
$username = $_ENV['AZURE_MYSQL_USERNAME'] ?? "root";
$password = $_ENV['AZURE_MYSQL_PASSWORD'] ?? "nagendra";
$db_name = $_ENV['AZURE_MYSQL_DBNAME'] ?? "payroll_management";
// $conn = mysqli_connect("localhost", "nagendra", "nagendra", "payroll_management");
$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Connection successful
//echo "Connected successfully";

// Close the connection
//mysqli_close($conn);

?>

