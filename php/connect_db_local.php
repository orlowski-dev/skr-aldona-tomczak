<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "epiz_28070581_skr";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        mysqli_set_charset($conn,"utf8");
    }
?>