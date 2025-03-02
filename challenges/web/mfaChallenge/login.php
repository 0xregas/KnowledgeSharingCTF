<?php
	
	session_start();

	require('connect.php');
	if (isset($_POST['username']) && isset($_POST['passw'])){
		$username = $_POST['username'];
		$password = $_POST['passw'];

		$stmt = $conn->prepare("SELECT id, username, password from users where username=? and password=?");
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$stmt->bind_result($id, $username, $password);
		$stmt->store_result();

		if ($stmt->num_rows > 0) {

			$stmt->fetch();

			$_SESSION['id'] = $id;
			$_SESSION['username'] = $username;

			setcookie('otp', rand(100000,999999));
			setcookie('id', $id);
			setcookie('username', $username);
			setcookie('password', $password);


			header('Location: otp.php');
		}
		else {
			echo "Invalid Credentials";
		}
	}

?>