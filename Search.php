<?php
		$conn=mysqli_connect("localhost","root","","reg");
		$vihod='';
		$query="SELECT * FROM names WHERE * LIKE '%".$_POST['search']."%'";
		$result = mysqli_query($conn,$query);
		while ($row = mysqli_fetch_array($result)) {
			$vihod .= $row['names']."</br>";
			}
		echo "$vihod";
 ?>




















