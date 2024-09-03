<?php
	//Loads all cookie related data
	session_start();

	require('connect.php');
	if (isset($_POST['username']) && isset($_POST['passw'])){
		$user = $_POST['username'];
		$userpass = $_POST['passw'];

		$query = "INSERT INTO users (username, password) VALUES ('$user', '$userpass')";
		#$query = "INSERT INTO users (username, password) VALUES ('teste', 'teste')";
		$result = mysqli_query($conn, $query);

		if ($result){
			echo "User created successfully";
			header('Location: user.html')
		}
		else {
			echo "User not added";
			header('Location: register.php');
		}
	}
?>