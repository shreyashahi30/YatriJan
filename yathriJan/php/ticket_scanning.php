<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are present
    if (isset($_POST["ticketNumber"]) && isset($_POST["seatNumber"])) {
        // Retrieve the ticket number and seat number from the form data
        $ticketNumber = $_POST["ticketNumber"];
        $seatNumber = $_POST["seatNumber"];

        // Generate QR code for the ticket information
        $data = "Ticket Number: $ticketNumber, Seat Number: $seatNumber";
        exec("ticketscanning.py '$data'");

        // Process the ticket information (e.g., save it to a database)
        // For demonstration purposes, we'll just echo the ticket information
        echo "Ticket Number: $ticketNumber<br>";
        echo "Seat Number: $seatNumber<br>";

        // You can perform any other actions here, such as saving the data to a database
    } else {
        // Required fields are missing, handle the error as needed
        echo "Error: Missing required fields";
    }
} else {
    // Form was not submitted using POST method, handle the error as needed
    echo "Error: Form not submitted";
}
?>
