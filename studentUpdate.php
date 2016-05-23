<?php
	include("db.php");
	$id = $_GET["id"];
	$p = mysql_query("SELECT * FROM users WHERE id='$id'");
	while($r = mysql_fetch_array($p)){
		$name = $r[1];
		$surname = $r[2];
		$email = $r[3];
		$pass = $r[4];

	}
?>

<form action="studentUpdateExec.php?id=<?= $r['id']?>" method="post">
	<table>
			<tr><td>id</td><td><input type="text" name="id" value="<?php echo "$id"; ?>"></td></tr>
			<tr><td>name</td><td><input type="text" name="name" value="<?php echo "$name"; ?>"></td></tr>
			<tr><td>surname</td><td><input type="text" name="surname" value="<?php echo "$surname"; ?>"></td></tr>
			<tr><td>email</td><td><input type="text" name="email" value="<?php echo "$email"; ?>"></td></tr>
			<tr><td>pass</td><td><input type="text" name="pass" value="<?php echo "$pass"; ?>"></td></tr>
			<tr><td colspan="2"><td><input type="submit" value="Update"></td></tr>

	</table>
</form>