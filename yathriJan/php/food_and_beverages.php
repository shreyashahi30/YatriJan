<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "yathrijan";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the JSON data sent by JavaScript
$data = json_decode(file_get_contents("php://input"), true);

if (!empty($data) && is_array($data)) {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO orders (item, price) VALUES (?, ?)");

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("sd", $itemName, $itemPrice);

        // Loop through each item in the cart and add to the database
        foreach ($data as $item) {
            $itemName = $item['item'];
            $itemPrice = (float)$item['price'];

            // Execute the statement
            if (!$stmt->execute()) {
                echo "Error: " . $stmt->error;
            }
        }

        // Close the statement
        $stmt->close();

        // Send a response back to JavaScript
        echo "Order processed successfully!";
    } else {
        echo "Error preparing SQL statement: " . $conn->error;
    }
} else {
    echo "No data received or data is not in the correct format.";
}

// Close the database connection
$conn->close();
?>
