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

		$queryId = $conn->prepare("SELECT UserId from users where username=?");
		$queryId->bind_param("s", $username);
		$queryId->execute();
		$result = $queryId->get_result();
		$row = $result->fetch_assoc();

		if ($result){
			echo "User created successfully";
			$_SESSION['userId'] = $row['userId'];
			$_SESSION['username'] = $user;
			header('Location: user.php');
		}
		else {
			echo "User not added";
			header('Location: register.php');
		}
	}
?>
