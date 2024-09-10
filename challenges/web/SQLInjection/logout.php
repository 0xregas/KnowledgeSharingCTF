<?php
	//Loads all cookie related data
	session_start();
	setcookie('isAdmin','', time() - 3600);
	session_destroy();
	header('Location: index.php');

?>