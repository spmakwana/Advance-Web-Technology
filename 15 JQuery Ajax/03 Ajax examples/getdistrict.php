<?php
	require "database.php";
	$statename = $_GET["state"];
	$result = GetDistrictList($statename);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_object()) {
				echo "<option value='$row->districtname'>$row->districtname</option>";
			}
		}
		?>