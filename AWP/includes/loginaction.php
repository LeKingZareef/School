<?php 
include '../core/init.php';
	if (!isset($_POST['login'])) {
		$login_username  = $_POST['login_username'];
		$login_password = $_POST['login_password'];

		$query = $conn->prepare("SELECT COUNT(`login_id`) FROM `login` WHERE `login_username` = '$login_username' AND `login_password` = '$login_password'");
		$query->execute();

		$count = $query->fetchColumn();

		if ($count == "1") {
			$_SESSION['login_username'] = $login_username;
			//$_SESSION['login_password'] = $login_password;

			header('location: ../index.php');
			session_start();
		} else {
			header('location: ../login.php');
		}
	}
	
?>