<?php
	session_start();

	if (!isset($_SESSION['userId'])){
		header('Location: index.php');
	}

	require('connect.php');
	if (isset($_GET['userId'])){
		$userId = $_GET['userId'];



		$stmt = $conn->prepare("SELECT noteName, noteDescription from note where userId = ?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$result = $stmt->get_result();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notes</title>
</head>
<body>

<div class="header">
	<h2>All your notes are here:</h2>
</div>

<form>
	<div id="button">
		<button type="button" onclick="window.location.href='/user.php';">Go back</button>
	</div>
	<?php 
		while ($row = $result->fetch_assoc()){ 
			echo "<div class='container'>";

			echo "<label for='title'><b>Title:</b></label>";
			echo "<p>".$row['noteName']."</p>";

			echo "<label for='description'><b>Description:</b></label>";
			echo "<p>".$row['noteDescription']."</p>";
		
			echo "</div>";
		}
	?>
</form>

</body>
<style>
	
	body {
		font-family: Arial;
		margin: 0;
	}

	form {
		padding: 3% 10%;
		border: 3px solid #f1f1f1;
	}

	button {
		background-color:  #1abc9c;
		width: 8%;
		color: white;
	}

	.container {
		padding: 16px;
		border-style: double;
		margin-top: 10px;
	}

	.header {
		padding: 60px;
		text-align: center;
		background: #1abc9c;
		color: white;
		font-sixe: 30px;
	}

	#button {
		text-align: center;
	}

</style>
</html>
