<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php require "database.php"; ?>
	<h1>Example 1</h1>
	<?php
		$result = GetStateList();
		echo 'State: <select id="state">';
		if ($result->num_rows > 0) {
			while($row = $result->fetch_object()) {
				echo "<option value='$row->statename'>$row->statename</option>";
			}
		}
		echo '</select>';
		$a = "abcdef";
		?>
		<br>District <select id="district"></select>
		<hr>
		<h1>Example 2</h1>
		<input type="text" name="username" id="username">
		<span id="errormessage" style="color:red;"></span>
		<hr>
		<h1>Example 3</h1>
		<div id="score1"><?php require "getscore.php"; ?></div>
		<input type="button" value="Update Score" id="updatescore">
		<hr>
		<h1>Example 4</h1>
		<div id="score2"><?php require "getscore.php"; ?></div>

		<!-- Cart <div id="cart">0</div>

		<div class="product">
			<h1>Product 1</h1>
			<h2>123</h2>
			<input type="button" value="Add to Card" class="addtocart">
		</div>

		<div class="product">
			<h1>Product 2</h1>
			<h2>456</h2>
			<input type="button" value="Add to Card" class="addtocart">
		</div>

		<div class="product">
			<h1>Product 3</h1>
			<h2>789</h2>
			<input type="button" value="Add to Card" class="addtocart">
		</div>

		<div class="product">
			<h1>Product 4</h1>
			<h2>109</h2>
			<input type="button" value="Add to Card" class="addtocart">
		</div> -->


		<script src="jquery-3.4.1.min.js"></script>
		<script src="myscript.js"></script>
</body>
</html>