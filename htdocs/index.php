<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xodivorce_maintenance";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT is_active FROM maintenance ORDER BY updated_at DESC LIMIT 1";
$result = $conn->query($sql);

if (!$result) {
    die("Error executing query: " . $conn->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $is_active = $row['is_active'];

    echo "Maintenance status: " . ($is_active ? "Active" : "Inactive") . "<br>";

    if ($is_active) {
        echo "Redirecting to 404.php<br>";
        include './error/404.php';  // Redirect to maintenance page
        exit();
    } else {
        echo "Redirecting to home.php<br>";
        include './home.php'; // If not in maintenance mode, include index.php
    }
} else {
    die("No records found in the maintenance table.");
}

$conn->close();
?>
