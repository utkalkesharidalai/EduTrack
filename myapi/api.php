<?php
// Array of users
$users = [
    ["id" => 1, "name" => "John Doe", "email" => "john@example.com"],
    ["id" => 2, "name" => "Jane Doe", "email" => "jane@example.com"],
    ["id" => 3, "name" => "Sam Smith", "email" => "sam@example.com"]
];

// Set the content type to application/json
header('Content-Type: application/json');

// Convert the array to JSON and output it
echo json_encode($users);
?>
