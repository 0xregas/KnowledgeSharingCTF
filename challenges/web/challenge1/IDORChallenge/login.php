<?php
	
	session_start();

	require('connect.php');
	if (isset($_POST['username']) && isset($_POST['passw'])){
		$username = $_POST['username'];
		$password = $_POST['passw'];

		$stmt = $conn->prepare("SELECT userId, username, isAdmin from users where username=? and password=?");
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$stmt->bind_result($userId, $username, $isAdmin);
		$stmt->store_result();
	
		if ($stmt->num_rows == 1) {
			
			$stmt->fetch();

			$_SESSION['userId'] = $userId;
			$_SESSION['username'] = $username;

			header('Location: user.php');
		}
		else {
			echo "User or password wrong";
		}
	}

?>
