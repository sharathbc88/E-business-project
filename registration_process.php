<?php
include_once('config.php');
session_start();
ob_start();


if($_POST['name'] != "" && $_POST['email'] != "" && $_POST['password'] != "") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Connect to the database
	$conn  = db_connect();

	// Create an insert query (New user)
	$sql = "insert into users (name, email, password) VALUES ('$name', '$email', '$password')";

	// Execute the query
	if($conn -> query($sql))
	{
		echo "<h1>Welcome to the shop, $name!</h1>";
		echo "<p>You can now login as a customer</p>";

        echo"<p>You will be redirected to login page in 5 seconds</p>";
        header("Refresh:5; url=login.html");
	}
	$conn -> close();

}
else {
    echo "<h1>Snap! Something was wrong...</h1>";
}
?>

