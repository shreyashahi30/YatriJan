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
    if (isset($_POST["trainNumber"]) && isset($_POST["birthNumber"]) && isset($_POST["incident"]) && isset($_POST["date"]) && isset($_POST["time"])) {
        // Retrieve the form data
        $trainNumber = $_POST["trainNumber"];
        $birthNumber = $_POST["birthNumber"];
        $incident = $_POST["incident"];
        $date = $_POST["date"];
        $time = $_POST["time"];

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO incident_reports (trainNumber, birthNumber, incident, date, time) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $trainNumber, $birthNumber, $incident, $date, $time);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<h2>Incident Report Submitted Successfully:</h2>";
            echo "<p><strong>Train Number:</strong> $trainNumber</p>";
            echo "<p><strong>Birth Number:</strong> $birthNumber</p>";
            echo "<p><strong>Incident:</strong> $incident</p>";
            echo "<p><strong>Date:</strong> $date</p>";
            echo "<p><strong>Time:</strong> $time</p>";
            echo "<p>Thank you for reporting!</p>";
        } else {
            echo "Error: " . $conn->error;
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
