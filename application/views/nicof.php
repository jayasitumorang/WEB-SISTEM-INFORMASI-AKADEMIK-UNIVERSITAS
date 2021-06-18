<?php
	$conn = mysqli_connect("localhost", "root", "", "tubes_webpro");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>