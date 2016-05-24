<?php
session_start();
//error_reporting(0);

require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

if (logged_in() ==- true) {
	$session_user_id = $_SESSION['users_id'];
	$users_data = users_data($session_user_id, 'users_id', 'users_name', 'users_password', 'users_type', 'users_achternaam', 'users_gebdatum', 'users_email', 'users_telefoon', 'users_activeer', 'users_about', 'users_profile');
	//echo $users_data['users_about'];
}

$errors = array();
?>