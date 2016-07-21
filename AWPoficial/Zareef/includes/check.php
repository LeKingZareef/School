<?php 	
	if (!isset($_SESSION['login_username'])) {
		header("Location: login.php");
		exit();
	}
?>