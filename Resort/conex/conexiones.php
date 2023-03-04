<?php
$servername = "162.241.62.50";
$database = "shellaar_RESORT";
$username = "shellaar_aar";
$password = "ABW.2{mcIQv,";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function consultando(){
    $servername = "162.241.62.50";
    $database = "shellaar_RESORT";
    $username = "shellaar_aar";
    $password = "ABW.2{mcIQv,";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}




?>