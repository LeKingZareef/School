<?php

	session_start();

	if(!isset($_SESSION['login_user']))
	{
	    //$_SESSION['login_user'] = "adminhome.php";
	    header("location: login.php");
	    exit();
	}

?>