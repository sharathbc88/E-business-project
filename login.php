<?php
//must appear BEFORE the <html> tag
session_start();
include_once('config.php');

if(isset($_REQUEST["email"])&& isset($_REQUEST["email"]) )
{
    echo "Login attempt";

    $email = $_REQUEST["email"];

    $password = $_REQUEST["password"];
	
	if ($email && $password)
	{
	  // if the user has just tried to log in
	
	  //make the database connection
	  $conn  = db_connect();	
	  
	  //make a query to check if user login successfully
	  $sql = "select * from users where email='$email' and password='$password'";
	  $result = $conn -> query($sql);
	  $numOfRows = $result -> num_rows;

	  if ($numOfRows)
	  {
		// login successfully, keep the user's email
		$_SESSION['valid_user'] = $email;
	  }
	  $conn -> close();
	}
}
if (isset($_SESSION['valid_user']))
{
    echo "<p>You are logged in as " . $_SESSION['valid_user'] . "</p>";
    echo "<p>Members only content goes here</p>";
    echo "<a href=\"logout.php\">Logout</a>";

  header("location: members_only.php");  
}
else
{

  if (isset($email))
  {
    // if user tried and failed to log in
    echo "<b>Incorrect - Please try it again </b><br>";
	echo "<a href=\"registration.html\">Sign-up</a><br>";
  }
  else 
  {
      echo "<p>You are logged in as " . $_SESSION['valid_user'] . "</p>";
      echo "<p>Members only content goes here</p>";
      echo "<a href=\"logout.php\">Logout</a>";

      header("location: members_only.php");
  }
/*
  // provide form to log in: same page for action  
  echo "<form method=post action=\"login.php\">";
  echo "<table>";
  echo "<tr><td>Email:</td>";
  echo "<td><input type=text name=email></td></tr>";
  echo "<tr><td>Password:</td>";
  echo "<td><input type=password name=password></td></tr>";
  echo "<tr><td colspan=2 align=center>";
  echo "<input type=submit value=\"Log in\"></td></tr>";
  echo "</table></form>";
*/
}

?>





