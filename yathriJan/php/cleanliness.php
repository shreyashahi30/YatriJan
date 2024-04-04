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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $birth = $_POST['birth'];
    $description = $_POST['description'];

    $check_username = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($check_username);

    if ($result->num_rows > 0) {
        $insert_query = "INSERT INTO cleanliness (username, birth, description) VALUES ('$username', '$birth', '$description')";

        if ($conn->query($insert_query) === TRUE) {
            echo '<script>alert("Report registered successfully!");</script>';
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    } else {
        echo '<script>alert("Username not found. Please try again.");</script>';
    }
}

$conn->close();
?>
