<?php
    $servername = "mysql54.mydevil.net";
    $username = "m1042_skr-admin";
    $password = "skrdbAdmin12";
    $db = "m1042_skr";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        mysqli_set_charset($conn,"utf8");
    }
?>