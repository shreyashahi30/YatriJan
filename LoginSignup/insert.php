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
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to insert new user
$sql = "INSERT INTO users VALUES ('$username','$password','$phone')";

if ($conn->query($sql) === TRUE) {
    // Signup successful
    $_SESSION['username'] = $username; // Store username in session
    header("Location: Home.php"); // Redirect to home page
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
