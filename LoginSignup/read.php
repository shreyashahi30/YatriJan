<?php
session_start(); // Start the session

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yathrijan";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to verify login credentials
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    $_SESSION['username'] = $username; // Store username in session
    header("Location: Home.php"); // Redirect to home page
} else {
    // Login failed
    echo "Invalid username or password";
}

$conn->close();
?>
