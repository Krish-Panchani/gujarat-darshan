<?php
// Set content type to JSON
header('Content-Type: application/json');

// Include your database connection file
require_once "../_db-conn.php";

// Retrieve the 'hotel_in' parameter from the URL
$hotel_in = isset($_GET['hotel_in']) ? mysqli_real_escape_string($conn, $_GET['hotel_in']) : '';

// Initialize an empty response array
$response = array();

// Prepare the SQL query
$query = "SELECT * FROM hotel_gd WHERE hotel_in = '$hotel_in'";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Fetch all the rows as an associative array
    $hotels = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // Assign the fetched data to the response
    $response['success'] = true;
    $response['data'] = $hotels;
} else {
    // If the query failed, set an error message
    $response['success'] = false;
    $response['message'] = 'Error fetching data';
}

// Encode the response as JSON and output it
echo json_encode($response);

// Close the database connection
mysqli_close($conn);
?>
