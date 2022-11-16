<?php
	$names = array("Ajay", "Amar", "Jay", "Jaydeep", "James", "Shreya", "Shraddha", "Surbhi", "Subham", "Shoham");
	$input = $_POST["input"];

	if($input == "ajay")
		echo "user exists";
		else
		echo "username available";
?>