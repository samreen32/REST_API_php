<?php
	$connection = mysqli_connect('localhost', 'root', '', 'form');
	if(mysqli_connect_error()){
		die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
	}
	
?>