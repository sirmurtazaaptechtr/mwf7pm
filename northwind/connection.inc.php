<?php
    session_start();
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "northwind";

    $conn = mysqli_connect($hostname,$username,$password,$database);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else {
        echo "<p>$database is connected successfully!</p>";
    }

    function safe_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }