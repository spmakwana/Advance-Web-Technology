<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Get state list
function GetStateList() {
	global $conn;
	$sql = "Select distinct statename from district";
	return $conn->query($sql);
}

// Get district name using state
function GetDistrictList($statename) {
	global $conn;
	$sql = "Select * from district where statename='$statename'";
	return $conn->query($sql);
}

// Get course data
function GetUserName() {
	global $conn;
	$sql = "Select username from users";
	return $conn->query($sql);
}

?>