<?php

 error_reporting(E_ALL);
ini_set("display_errors", 1);

    $host = "database-2.cr0a80oeced6.us-east-2.rds.amazonaws.com";
     //"database-1.cr0a80oeced6.us-east-2.rds.amazonaws.com";
    $port = 3306;
    $username = "admin";
    $password = "12345678";
    $database = "phone_usage";

    // Create a connection
    //$conn = new mysqli($host, $username, $password, $database);
    $conn = new mysqli($host, $username, $password, $database, $port);
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Close the connection
    //$conn->close();

?>
