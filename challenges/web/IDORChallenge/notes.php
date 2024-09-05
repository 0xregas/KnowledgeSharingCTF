<?php
	session_start();

	if (!isset($_SESSION['id'])){
		header('Location: index.php');
	}

	require('connect.php');
	if (isset($_GET['id'])){
		$id = $_GET['id'];



		$stmt = $conn->prepare("SELECT noteName, noteDescription from note where id = ?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();

		$title = $row['noteName'];
		$description = $row['noteDescription'];
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
	<div class="container">
		<label for="title"><b>Title:</b></label>
		<p><?php echo $title ?></p>

		<label for="description"><b>Description:</b></label>
		<p><?php echo $description ?></p>
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