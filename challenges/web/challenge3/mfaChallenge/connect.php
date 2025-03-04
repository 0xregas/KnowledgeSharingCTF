<?php
	
	$user = 'hbctf';
	$pass = 'hbctf';
	$host = 'mysql';
	$dabatase = 'webchal3_notes';

	$conn = new mysqli($host, $user, $pass, $dabatase);

	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	#echo "Connected successfully";

?>
