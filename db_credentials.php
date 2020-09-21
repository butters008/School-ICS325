<?php
    // DEFINE('DB_SERVER', 'localhost');
    // DEFINE('DB_NAME', 'ics325');
    // DEFINE('DB_USER', 'root');
    // DEFINE('DB_PASS', '');

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "ics325";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>