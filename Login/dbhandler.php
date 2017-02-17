<?php
	$conn = mysqli_connect("localhost", "root", "", "phpro_auth");
	if(!$conn){
		die("Connection failed: ". mysqli_connect_error());
	}
?>