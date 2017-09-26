<?php
include_once('jewelry_function.php');
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];

//make the database connection
$conn  = db_connect();

//create a query to get all details of book
$sql = "SELECT id, name, price, description";
$sql = $sql . " FROM jewelry WHERE id = '$id'";

$sql_result = $conn -> query($sql);
$conn -> close();
?>

<html>
<head>
    <title>Jewelry Details</title>
</head>
<body>
<?php
print "<h2>Title: <i>$title</i></h2>\n";
display_jewelry_detail($sql_result);

?>

</body>
</html>