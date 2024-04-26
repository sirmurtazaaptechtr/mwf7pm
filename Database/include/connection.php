<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Apr222024_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn) {
    echo "$database Connected successfully";    
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
