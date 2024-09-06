<?php
	
	session_start();

	require('connect.php');
	if (isset($_POST['username']) && isset($_POST['passw'])){
		$username = $_POST['username'];
		$password = $_POST['passw'];

		$query = "SELECT id, username, password from users where username='$username' and password='$password'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			$row = $result->fetch_assoc();

			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['username'];

			header('Location: user.php');
		}
		else {
			echo "User or password wrong";
		}
	}

?>