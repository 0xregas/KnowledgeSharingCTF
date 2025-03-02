<?php
	session_start();

	if (!isset($_SESSION['id'])){
		header('Location: index.php');
	}

	require('connect.php');
	if (isset($_POST['title']) && isset($_POST['description'])){

		$title = $_POST['title'];
		$description = $_POST['description'];

		$userId = $_SESSION['id'];

		$stmtNote = $conn->prepare("INSERT INTO note (id, noteDescription, noteName) VALUES (?,?,?)");
		$stmtNote->bind_param("iss", $userId,$description, $title);
		
		if ($stmtNote->execute()){
			header('Location: notes.php?id='.$_SESSION['id']);
		} else {
			echo "Failed to add note";
		}
	}
?>
