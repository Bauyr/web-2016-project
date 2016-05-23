<?php
	$p = mysql_query("SELECT * FROM users");
	echo "Table of USERS<br>";
	echo "<a href=studentCreate.php>Add User</a><br>";
	echo "<table border=1>";
	echo "<tr><th>id</th><th>Name</th><th>Surname</th><th>email</th><th>Pass</th><th colspan=2>Actions</th></tr>";


	while ($r = mysql_fetch_array($p)){
		echo "<tr>";
		echo "<td>$r[0]</td>";
		echo "<td>$r[1]</td>";
		echo "<td>$r[2]</td>";
		echo "<td>$r[3]</td>";
		echo "<td>$r[4]</td>";
		echo "<td><a href=studentUpdate.php?id=$r[0]>Update</a></td>";
		echo "<td><a href=studentDelete.php?id=$r[0]>Delete</a></td>";
		echo "</tr>";
	}
	echo "</table>";
	
?>
<a href="/PROJEECT/index2.php">TO SITE</a>