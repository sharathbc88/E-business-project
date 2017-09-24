<?php
//define constants for connection info
define("MYSQLUSER","jc448750");
define("MYSQLPASS","150592");
define("HOSTNAME","localhost");
define("MYSQLDB","jc448750");

//make connection to database
function db_connect()
{
    $conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
    if($conn -> connect_error) {
        die('Connect Error: ' . $conn -> connect_error);
    }
    return $conn;
}
?>
