<?php
    $conn = mysqli_connect("localhost", "root", "root");

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
?>