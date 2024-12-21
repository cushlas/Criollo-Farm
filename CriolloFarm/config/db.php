<?php
// Database connection setup
$servername = "localhost";
$username = "root"; // Default XAMPP user
$password = "";     // Leave blank for default XAMPP setup
$dbname = "criollofarm"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$hashed_password = password_hash('your_password', PASSWORD_DEFAULT);

?>

