<?php
	require 'checksession.php';
?>

<?php
	session_start();

	if(session_destroy()) // Destroying All Sessions
	{
		setcookie('usersname', $username, time()-7600);
		header("Location: login.php"); // Redirecting To Home Page
	}

	//print_r($_SESSION);
?>