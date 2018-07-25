<?php
	session_start();
	session_destroy();
	setcookie("email_address", "" , time() - (86400 * 10));
	header("Location: index.php");
	exit();
?>