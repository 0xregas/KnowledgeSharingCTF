<?php
	//Loads all cookie related data
	session_start();
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
	<h2>Notebook of <?php echo $_SESSION['username'] ?></h2>
	<p>Hello again, world!</p>
</div>

<div class="navbar">
	<ul>
		<li><a href="/user.php">Home</a></li>
		<li><a href="/notes.php?id=<?php echo $_SESSION['id']?>">My notes</a></li>
		<li><a href="/addNote.html">Add Note</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="#about">About</a></li>
		<li style="float:right;padding-right: 1%;"><a href="/logout.php">Logout</a></li>
	</ul>
</div>

</body>
<style>
	.header {
		padding: 60px;
		text-align: center;
		background: #1abc9c;
		color: white;
		font-sixe: 30px;
	}

	.navbar {
		background-color: #333;
		overflow: hidden;
	}

	.navbar ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
	}

	.navbar li {
		float: left;
	}

	.navbar a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.navbar li a:hover {
		background-color: #111;
	}

	body {
		font-family: Arial;
		margin: 0;
	}

</style>
</html>