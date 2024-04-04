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

if(isset($_SESSION['username'])) {
    $item_description = $_POST['item-description'];
    $date_lost = $_POST['date'];
    $time_lost = $_POST['time'];
    $station_lost_at = $_POST['station-description'];
    $next_station = $_POST['next-station'];
    $before_station = $_POST['before-station'];
    $username = $_SESSION['username'];

    $selected_category = $_POST['selected-category'];
    
    $sql = "INSERT INTO lost_items (item_description, date_lost, time_lost, station_lost_at, next_station, before_station, username, selected_category) 
            VALUES ('$item_description', '$date_lost', '$time_lost', '$station_lost_at', '$next_station', '$before_station', '$username', '$selected_category')";


    if ($conn->query($sql) === TRUE) {
        echo "Item reported successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Please log in to report a lost item.";
    header("Location: Login_Signup.html");
}

$conn->close();
?>
