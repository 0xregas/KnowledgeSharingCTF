<?php
	session_start();

	if (!isset($_SESSION['userId'])){
		header('Location: index.php');
	}

	require('connect.php');
	if (isset($_POST['title']) && isset($_POST['description'])){

		$title = $_POST['title'];
		$description = $_POST['description'];

		$userId = $_SESSION['userId'];

		$stmtNote = $conn->prepare("INSERT INTO note (id, noteDescription, noteName) VALUES (?,?,?)");
		$stmtNote->bind_param("iss", $userId,$description, $title);
		
		if ($stmtNote->execute()){
			header('Location: notes.php?userId='.$_SESSION['userId']);
		} else {
			echo "Failed to add note";
		}
	}
?>
