<?php
// Database connection
$servername = "sqlxxx.epizy.com"; // Replace with your Database host
$username = "your_db_user";       // Replace with your MySQL username
$password = "your_db_password";   // Replace with your MySQL password
$dbname = "xodivorce_maintenance"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to check maintenance status
$sql = "SELECT is_active FROM maintenance ORDER BY updated_at DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $is_active = $row['is_active'];

    // Check if maintenance mode is active
    if ($is_active) {
        include '404.php';  // Redirect to maintenance page
        exit();
    }
}

// If not in maintenance mode, include index.php
include 'index.php';

$conn->close();
?>
