<?php
if(isset($_POST["name"]))
{
	$name = $_POST["name"];
	$address = $_POST["address"];
	$mobile = $_POST["mobile"];
	$university = $_POST["university"];

	$data = htmlentities("Name: $name <BR>Address: $address<BR>Mobile No. $mobile<BR>University:  $university");

	$file = fopen("data.txt", "a");
	fwrite($file, $data);
	fclose($file);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
</head>

<body>
	<form action="#" method="post">
		Name: <input type="text" name="name" id="">
		<br>
		Address: <textarea name="address" id="" cols="30" rows="3"></textarea>
		<br>
		Mobile No. <input type="text" name="mobile" id="">
		<br>
		University: <input type="text" name="university" id="">
		<input type="submit" value="Submit Data">
	</form>
</body>

</html>