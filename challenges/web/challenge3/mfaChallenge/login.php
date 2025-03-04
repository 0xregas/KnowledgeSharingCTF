<?php
	
	session_start();

	require('connect.php');
	if (isset($_POST['username']) && isset($_POST['passw'])){
		$username = $_POST['username'];
		$password = $_POST['passw'];

		$stmt = $conn->prepare("SELECT userId, username from users where username=? and password=?");
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$stmt->bind_result($userId, $username);
		$stmt->store_result();

		if ($stmt->num_rows == 1) {

			$stmt->fetch();

			$_SESSION['userId'] = $userId;
			$_SESSION['username'] = $username;

			setcookie('otp', rand(100000,999999));
			setcookie('userId', $userId);
			setcookie('username', $username);

			header('Location: otp.php');
		}
		else {
			echo "Invalid Credentials";
		}
	}

?>
