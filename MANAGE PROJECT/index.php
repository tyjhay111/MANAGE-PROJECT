<?php
// Database credentials
$servername = "localhost"; // Use '127.0.0.1' or 'localhost'
$username = "root";        // Default for XAMPP/WAMP
$password = "";            // Leave blank for XAMPP/WAMP
$dbname = "brest resturants";        // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Example Query: Insert Data
$sql = "INSERT INTO users (username, email) VALUES ('JohnDoe', 'john@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);