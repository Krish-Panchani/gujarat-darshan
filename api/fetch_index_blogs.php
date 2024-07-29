<?php
// Set content type to JSON
header('Content-Type: application/json');

// Include your database connection file
require_once "../_db-conn.php";

// Initialize an empty response array
$response = array();

// Prepare the SQL query to fetch only the required fields
$query = "SELECT date, img, title, slug FROM blogs_gd ORDER BY RAND() LIMIT 6";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Fetch all the rows as an associative array
    $blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // Assign the fetched data to the response
    $response['success'] = true;
    $response['data'] = $blogs;
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
