<?php
	require "database.php";
	$username = $_GET["username"];
	$flag = 0;
	$result = GetUsername();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_object()) {
				if($username == $row->username) {
					echo "username already exists";
					$flag = 1;
					break;
				}
			}
		}
		if($flag == 0) {
		echo "username available";
	}