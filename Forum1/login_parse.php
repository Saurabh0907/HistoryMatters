
<?php
session_start();
include_once("Database_Connect.php");
if(isset($_POST['name']))
{
	$un = $_POST['name'];
	$pass = $_POST['password'];
	
	$abc = strrev($pass);
	$password = hash("sha512", $abc); 
	$sql = "select * from user WHERE name='".$un."' AND password='".$password."'";
	$res = mysql_query($sql) or die(mysql_error());
	
	if(mysql_num_rows($res) == 1)
	{
		$row = mysql_fetch_assoc($res);
		$_SESSION['uid'] = $row['id'];
		$_SESSION['username'] = $row['name'];
		header("Location:index.php");
	}
	else
	{
		echo "Invalid Login Info";
	}
}


?>