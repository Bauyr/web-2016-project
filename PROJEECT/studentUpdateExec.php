<?php 
	session_start();
	include("db.php");

	$id = $_REQUEST["id"];
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];

	mysql_query("UPDATE users SET name = '$name' WHERE id ='$id' ");
	mysql_query("UPDATE users SET surname= '$surname' WHERE id ='$id' ");
	mysql_query("UPDATE users SET email = '$email' WHERE id ='$id' ");
	mysql_query("UPDATE users SET pass= '$pass' WHERE id ='$id' ");	

	echo "User data successfuly updated<br>";
	echo "<a href=CRUD.php>Home</a>";
?>