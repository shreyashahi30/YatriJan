<?php
session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yathrijan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users VALUES ('$username','$password','$phone')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['username'] = $username; 
    header("Location: Home.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
