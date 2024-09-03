<?php
	//Loads all cookie related data
	session_start();
	session_destroy();
	header('Location: index.php');

?>