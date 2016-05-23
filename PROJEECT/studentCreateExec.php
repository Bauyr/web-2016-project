<?php 
	include("db.php");
	$id = $_POST["id"];
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	mysql_query("INSERT INTO users VALUES ('$id','$name','$surname','$email','$pass') ");

	echo "User data successfuly inserted<br>";
	echo "<a href=CRUD.php>Home</a>";
?>