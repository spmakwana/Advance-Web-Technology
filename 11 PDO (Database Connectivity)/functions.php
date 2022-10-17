<?php

$host = 'localhost';
$db = 'student';
$user = 'root';
$password = '';

function connect($host, $db, $user, $password)
{
	$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

	try {
		$conn =  new PDO($dsn, $user, $password);
		$conn->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return $conn;
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}

$conn = connect($host, $db, $user, $password);

// Insert Data
function InsertData($name, $city)
{
	global $conn;
	$query = "INSERT INTO student(name, city) VALUES(:name, :city)";
	$statement = $conn->prepare($query);
	try 
	{
		// Bind Parameter seperatly and then execute query
		$statement->bindParam(":name", $name);
		$statement->bindParam(":city", $city);
		$statement->execute();

		// Bind parameters as argument to execute function
		// $statement->execute([
		// 	":name" => $name,
		// 	":city" => $city
		// ]);
		$lastInsertId = $conn->lastInsertId();
		return $lastInsertId;
		// return $statement->rowCount();
	}
	catch (PDOException $e) {
		return 0;
	}
}

// echo InsertData("abc", "jamnagar");

function UpdateData($name, $city, $id)
{
	global $conn;
	$query = "update student set name=:name, city=:city where id=:id";
	$statement = $conn->prepare($query);
	try
	{
		$statement->execute([
			":name" => $name,
			":city" => $city,
			":id" => $id
		]);
		return $statement->rowCount();
	}
	catch (PDOException $e) {
		return 0;
	}
}

// echo UpdateData("xyz", "jamnagars", "3");

function DeleteData($id)
{
	global $conn;
	$query = "deletes from student where id=:id";
	$statement = $conn->prepare($query);
	try
	{
		$statement->execute([
			":id" => $id
		]);
		return $statement->rowCount();
	}
	catch (PDOException $e) {
		return 0;
	}
}

// echo DeleteData(6);

function SelectData($username, $password)
{
	global $conn;
	$query = "select * from users where username='$username' and password='$password'";
	// $query = "select * from student where name like ?";
	$statement = $conn->prepare($query);
	$statement->execute();
	// $statement->execute(["%$id%"]);
	return $statement;
}

// $statement = SelectData('arjun', "abc' or '1' = '1");
// $statement = SelectData("arjun'#", "");





function SelectDataP($id)
{
	global $conn;
	$query = "select * from student where id>:id";
	// $query = "select * from student where name like ?";
	$statement = $conn->prepare($query);
	$statement->execute([
		":id" => $id
	]);
	// $statement->execute(["%$id%"]);
	return $statement;
}

// $statement = SelectDataP(0);

// Default fetch mode can be set using connection setAttribute Property
//Fetch single row
// $row = $statement->fetch();
// echo "<pre>";
// var_dump($row);
// echo "</pre>";

// Fetch All row
// $row = $statement->fetchAll();
// echo "<pre>";
// var_dump($row);
// echo "</pre>";

//Fetch Single Value (Scalar Value)
// $value = $statement->fetch(PDO::FETCH_COLUMN);
// echo "<pre>";
// var_dump($row);
// echo "</pre>";
?>