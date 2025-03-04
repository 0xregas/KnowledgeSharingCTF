<?php
	
	session_start();

	require('connect.php');
	if (isset($_POST['username']) && isset($_POST['passw'])){
		$username = $_POST['username'];
		$password = $_POST['passw'];

		$query = "SELECT userId, username, isAdmin from users where username='$username' and password='$password'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			$row = $result->fetch_assoc();

			$_SESSION['userId'] = $row['userId'];
			$_SESSION['username'] = $row['username'];

			if ($row['isAdmin'] == 1){
				setcookie('isAdmin', 1);
			}
			else {
				setcookie('isAdmin', 0);
			}
			header('Location: user.php');
		}
		else {
			echo "User or password wrong";
		}
	}

?>
