<?php
// The URL of your local API
$apiUrl = "http://localhost/myapi/api.php";

// Initialize a cURL session
$curl = curl_init($apiUrl);

// Set options for the cURL session
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return the response as a string

// Execute the cURL session
$response = curl_exec($curl);

// Check for errors
if ($response === false) {
    echo "cURL Error: " . curl_error($curl);
} else {
    // Decode the JSON response into an associative array
    $data = json_decode($response, true);

    // Output the data
    foreach ($data as $user) {
        echo "Name: " . $user['name'] . "\n";
        echo "email: " . $user['email'] . "\n";
    }
}

// Close the cURL session
curl_close($curl);
?>
