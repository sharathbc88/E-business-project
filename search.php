<?php
include_once('jewelry_function.php');


//if user clicks the submit button
if( isset($_REQUEST["name"]) )
{
    $name = $_REQUEST["name"];
    //make the database connection
    $conn  = db_connect();

    //create a query: find books by a title or a part of title
    $sql = "SELECT id, name, price, description FROM jewelry";
    $sql = $sql . " WHERE name like '%$name%'";
    $sql_result = $conn -> query($sql);
    $conn -> close();
    echo "<h1>Search Results</h1>";
    display_jewelry($sql_result);
}

?>