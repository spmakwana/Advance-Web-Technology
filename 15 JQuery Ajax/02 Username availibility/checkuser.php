<?php 

$username = $_POST["username"];

if($username == "abc@gmail.com") {
	echo "username is already exists";
}
else {
	echo "username is available";
}
?>