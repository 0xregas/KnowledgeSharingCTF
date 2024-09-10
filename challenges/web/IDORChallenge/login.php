<?php
	
	session_start();

	require('connect.php');
	if (isset($_POST['username']) && isset($_POST['passw'])){
		$username = $_POST['username'];
		$password = $_POST['passw'];

		$stmt = $conn->prepare("SELECT id, username, password, isAdmin from users where username=? and password=?");
		$stmt->bind_param("ss", $username, $password);
		$result = $stmt->execute();

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