<?php
	session_start();
	if (!isset($_SESSION['id'])){
		header('Location: index.php');
	}

	require('connect.php');
/*	if (isset($_COOKIE['isAdmin']) && $_COOKIE['isAdmin'] == 1){
		$query = "SELECT * FROM users";
		$result = mysqli_query($conn, $query);

		while ($row = $result->fetch_assoc()){ 
			echo "<label for='username'><b>User:</b></label>";
			echo "<p>".$row['username']."</p>";
		
			echo "<label for='password'><b>Password:</b></label>";
			echo "<p>".$row['password']."</p>";
		}
	} else {
		echo "You're not allowed on this page";
	}*/


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<div class="header">
	<h2>List of users in the system:</h2>
</div>

<form>
	<div class="container">
		<?php 
			if (isset($_COOKIE['isAdmin']) && $_COOKIE['isAdmin'] == 1){
				$query = "SELECT * FROM users";
				$result = mysqli_query($conn, $query);

				while ($row = $result->fetch_assoc()){ 
					echo "<label for='username'><b>User:</b></label>";
					echo "<p>".$row['username']."</p>";
				
					echo "<label for='password'><b>Password:</b></label>";
					echo "<p>".$row['password']."</p>";
				}
			} else {
				echo "Only admins are allowed access on this page. Maybe you can one day you'll get there.";
			}
		?>
	</div>
</form>

</body>
<style>
	
	body {
		font-family: Arial;
		margin: 0;
	}

	form {
		padding: 5% 10%;
		border: 3px solid #f1f1f1;
	}

	.container {
		padding: 16px;
	}

	.header {
		padding: 60px;
		text-align: center;
		background: #1abc9c;
		color: white;
		font-sixe: 30px;
	}

</style>
</html>