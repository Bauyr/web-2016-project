<?php
	include("db.php");
	$id = $_GET["id"];
	mysql_query("DELETE FROM users WHERE id='$id'");

	echo "User data successfuly deleted<br>";
	echo "<a href=CRUD.php>Home</a>";
?>