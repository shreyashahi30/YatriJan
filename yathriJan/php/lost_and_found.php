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
    if (isset($_POST["item-description"]) && isset($_POST["date"]) && isset($_POST["time"]) && isset($_POST["station-description"]) && isset($_POST["next-station"]) && isset($_POST["before-station"])) {
        // Retrieve the form data
        $itemDescription = $_POST["item-description"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $stationDescription = $_POST["station-description"];
        $nextStation = $_POST["next-station"];
        $beforeStation = $_POST["before-station"];

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO lost_items (item_description, date_of_losing, time_of_losing, station_lost_at, next_station, before_station) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $itemDescription, $date, $time, $stationDescription, $nextStation, $beforeStation);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<h2>Lost Item Report Submitted Successfully:</h2>";
            echo "<p><strong>Item Description:</strong> $itemDescription</p>";
            echo "<p><strong>Date of Losing:</strong> $date</p>";
            echo "<p><strong>Time of Losing:</strong> $time</p>";
            echo "<p><strong>Station Lost At:</strong> $stationDescription</p>";
            echo "<p><strong>Next Station:</strong> $nextStation</p>";
            echo "<p><strong>Before Station:</strong> $beforeStation</p>";
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
