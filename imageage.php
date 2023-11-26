<?php
// Replace with your Azure Face API subscription key and endpoint
$subscriptionKey = 'YOUR_SUBSCRIPTION_KEY';
$endpoint = 'YOUR_API_ENDPOINT';

$imageUrl = 'https://example.com/path/to/your/image.jpg';

// Azure Face API URL for age detection
$url = $endpoint . '/face/v1.0/detect';

// Request parameters
$params = array(
    'returnFaceAttributes' => 'age',
);

// Prepare the HTTP headers
$headers = array(
    'Content-Type: application/json',
    'Ocp-Apim-Subscription-Key: ' . $subscriptionKey,
);

// Create the POST request to the API
$ch = curl_init($url . '?' . http_build_query($params));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array('url' => $imageUrl)));

// Execute the request and get the response
$response = curl_exec($ch);
curl_close($ch);

// Parse the response
$data = json_decode($response, true);

// Check if the response contains face attributes
if (isset($data[0]['faceAttributes']['age'])) {
    $age = $data[0]['faceAttributes']['age'];
    echo "Detected age: $age";
} else {
    echo "No faces or age detected in the image.";
}
?>
