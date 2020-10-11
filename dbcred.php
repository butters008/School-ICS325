<?php
// This was taken from my ICS311 class
DEFINE('DB_SERVER', 'localhost');
DEFINE('DB_NAME', 'ics325fa2005');
DEFINE('DB_USER', 'ics325fa2005');
DEFINE('DB_PASS', '2944');

function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}

function db_disconnect($connection) {
    if(isset($connection)) {
    mysqli_close($connection);
    }
}

function confirm_db_connect() {
    if(mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}

function confirm_result_set($result_set) {
    global $db;

    if (!$result_set) {
        echo mysqli_error($db);
        exit("The Database query failed.");
    }
}
?>
