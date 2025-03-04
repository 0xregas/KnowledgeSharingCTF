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

		$query = $conn->prepare("SELECT userId, username from users where username=?");
		$query->bind_param("s", $username);
		$query->execute();
		$query->bind_result($userId, $username)
		$query->store_result();
		$login = $quey->fetch_assoc();

		if ($login){
			echo "User created successfully";
			$_SESSION['userId'] = $userId;
			$_SESSION['username'] = $username;
			header('Location: user.php');
		}
		else {
			echo "User not added";
			header('Location: register.php');
		}
	}
?>
