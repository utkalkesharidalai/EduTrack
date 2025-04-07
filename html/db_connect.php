<?php
$host = "localhost";  // Server Name (localhost for local server)
$user = "root";       // MySQL Username (default: root)
$pass = "root";           // MySQL Password (default is empty in XAMPP)
$dbname = "GP_IT_DB"; // Database Name

// Create Connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Uncomment to confirm connection
// echo "Connected successfully";
?>
