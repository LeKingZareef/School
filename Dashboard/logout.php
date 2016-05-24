<?php
session_start();
session_destroy(); // Destroying All Sessions
header("Location: includes/widget/login.php"); // Redirecting To Home Page
	//print_r($_SESSION);
?>