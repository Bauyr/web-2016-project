<?php 
	$to = $_POST["to"];
	$first_name =  $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$checkboxes = $_POST["checkboxes"];
	$text_area = $_POST["text_area"];
	$header = $_POST["header"];

	mail($to,$first_name,$last_name,$checkboxes,$text_area,$header);

?>