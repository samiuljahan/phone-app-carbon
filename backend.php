<?php
include("database.php");
$connection = $conn;

// Handle the AJAX request
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["city"])) {
        $selectedCity = $_GET["city"];

        // Query to get ward_names based on selectedCity (case-insensitive)
        $sql = "SELECT ward_name FROM demographics WHERE LOWER(local_authority) = LOWER(?)";

        
        // Prepare and execute the SQL query
        if ($stmt = mysqli_prepare($connection, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $selectedCity);
            mysqli_stmt_execute($stmt);
            
            // Get the result
            $result = mysqli_stmt_get_result($stmt);
            
            // Fetch the ward_names
            $wardNames = [];
            $wardNames[] = "Please choose";
            while ($row = mysqli_fetch_assoc($result)) {
                $wardNames[] = $row["ward_name"];
            }
            
            // Close the statement
            mysqli_stmt_close($stmt);
           // echo $wardNames;
            
            // Return JSON response
            echo json_encode($wardNames);
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
}

// Close the database connection
mysqli_close($connection);
