<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yathrijan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are present
    if (isset($_POST["name"]) && isset($_POST["destination"]) && isset($_POST["seat"])) {
        // Retrieve the form data
        $name = $_POST["name"];
        $destination = $_POST["destination"];
        $seat = $_POST["seat"];

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO passenger_details (name, destination, seat) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $destination, $seat);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<h2>Passenger Details:</h2>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Destination:</strong> $destination</p>";
            echo "<p><strong>Seat Number:</strong> $seat</p>";
            echo "<p>Record inserted successfully!</p>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        // Required fields are missing, handle the error as needed
        echo "Error: Missing required fields";
    }
}

// Close connection
$conn->close();
?>
