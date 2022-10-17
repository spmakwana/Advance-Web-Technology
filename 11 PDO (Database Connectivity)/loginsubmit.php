<?php
require "functions.php";
session_start();
if(isset($_GET["username"]))
{
	$username = $_GET["username"];
	$password = $_GET["password"];

	$statement = LoginCheck($username, $password);
	$row = $statement->fetchAll();
	var_dump($row);
	if(count($row) == 0)
	{
		echo "incorrect username and password";
	}
	else
	{
		echo "login successful";
		$_SESSION["username"] = $username;

	}
}

?>