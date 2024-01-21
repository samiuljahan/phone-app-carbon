<?php
include("database.php");

// Get values from AJAX request
$area = $conn->real_escape_string($_POST['area']);
$city = $conn->real_escape_string($_POST['city']);
$column = $conn->real_escape_string($_POST['description']);

// Determine which column to select based on the description
// switch($description) {
//     case 'secondary':
//         $column = 'secondary_school_age_11_16yrs';
//         break;
//     case 'A-level or college':
//         $column = 'further_education_17_18yrs';
//         break;
//     case 'university':
//         $column = 'higher_education_19_22yrs';
//         break;
//     // Add more cases if needed
//     default:
//         // Handle unexpected description
//         die("Invalid description");
// }

// Capture the POST data
$area = $_POST['area'];
$city = $_POST['city'];
$description = $_POST['description'];
$individual_consumption = $_POST['individualConsumption'];
$column = "";
$total_consumption = 123.45;
$car_comparison = "";


// Prepare the SQL query based on the descriptionSelect value
$sql = "";
switch ($description) {
    case 'secondary':
        $column = "secondary_school_age_11_16yrs";
        break;
    case 'A-level or college':
        $column = "further_education_17_18yrs";
        break;
    case 'university':
        $column = "higher_education_19_22yrs";
        break;
}

$sql = "SELECT $column FROM demographics WHERE local_authority = '$city' AND ward_name = '$area'";
$sql .= " LIMIT 1";

$data = [];
// Execute the query
$result = $conn->query($sql);

// Fetch the result
if ($result && $result->num_rows > 0) {
    // Output data of the first row (assuming only one row is expected)
    $row = $result->fetch_assoc();
    $total_consumption = $individual_consumption * $row[$column];
    //$total_consumption = floor($total_consumption);
    //echo 
} else {
    echo "0 results or error";
}

// Prepare the query
// $query = "SELECT car_comparison FROM car_comparison ORDER BY ABS(co2_tonnes - $total_consumption) LIMIT 1";
// //echo '{"query is": ' . $query . '}';

// // Execute the query
// $result = $conn->query($query);

// // Check if the query was successful
// if ($result) {
//     // Fetch the result row
//     $row = $result->fetch_assoc();

//     if ($row) {
//         // Output the car_comparison value
//         $car_comparison = $row['car_comparison'];
//         //echo "Car Comparison: $car_comparison";
//     } else {
//         echo "No matching records found.";
//     }

//     // Close the result and connection
//     $result->close();
//     $conn->close();
// } else {
//     echo "Error executing the query: " . $conn->error;
// }


if ($total_consumption != 123.45) {
    $data['total_consumption'] = $total_consumption;
    //$data['car_comparison'] = "tt";
    echo json_encode($data);
} else {
    echo "The double values are equal.";
}
