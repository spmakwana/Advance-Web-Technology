<?php
require "functions.php";
$statement = SelectDataP();

$row = $statement->fetchAll();

echo "<table border='1'>";
for($i=0; $i<count($row); $i++)
{
	echo "<tr><td>".$row[$i]->id."</td>";
	echo "<td>".$row[$i]->name."</td>";
	echo "<td>".$row[$i]->city."</td></tr>";
}
echo "</table>";
?>