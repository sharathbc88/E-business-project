<?php
include_once('jewelry_function.php');

echo "<html>
<head><title>Search Jewelry</title></head>
<body>
<h1>Search Jewelry</h1>
<form action='search.php'>
<table>	
<tr><td>Title:</td>
<td><input type='text' id='name' name=name></td>
<td><input type='submit' value='Go'></td></tr>
</table></form>";

//if user clicks the submit button
if( isset($_REQUEST["name"]) )
{
    $name = $_REQUEST["name"];
    //make the database connection
    $conn  = db_connect();

    //create a query: find books by a title or a part of title
    $sql = "SELECT name, price, description FROM jewelry";
    $sql = $sql . " WHERE name like '%$name%'";
    $sql_result = $conn -> query($sql);
    $conn -> close();
    echo "<h1>Search Results</h1>";
    display_jewelry($sql_result);
}

?>