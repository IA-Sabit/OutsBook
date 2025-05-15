<?php
// URL of the website to hit
$url = 'https://example.com';

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url); // Set the URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects
curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Set timeout to 10 seconds

// Execute the cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Output the response
    echo 'Response: ' . $response;
}

// Get HTTP status code
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
echo 'HTTP Status Code: ' . $httpCode;

// Close cURL session
curl_close($ch);
?>
