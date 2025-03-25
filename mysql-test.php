<?php

$servername = "your_servername"; // e.g., localhost
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname"; // optional, but recommended if you intend to select a database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Optionally, you can perform a simple query to further test the connection:

$sql = "SELECT 1"; // A very basic query to check if the database responds
$result = $conn->query($sql);

if ($result) {
    echo "<br>Query successful";
} else {
    echo "<br>Query failed: " . $conn->error;
}


$conn->close();
