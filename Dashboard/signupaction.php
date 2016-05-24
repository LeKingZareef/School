<?php
	include 'core/init.php';
	
	if (empty($_POST) === false) {
		$verplichte_velden = array('users_name', 'users_password', 'password_again', 'users_type', 'users_achternaam', 'users_gebdatum', 'users_email', 'users_telefoon', 'users_about' ); 
		//echo '<pre>', print_r($_POST, true), '</pre>';
		foreach ($_POST as $key => $value) {
			if (empty($value) && in_array($key, $verplichte_velden) === true) {
				$errors[] = "alle velden zijn verlicht in te vullen";
				break 1;
			} 	
		}
		if (empty($errors) === true) {
			if (users_bestaat($_POST['users_name']) == true) {
				$errors[]="Sorry, maar de gebruiker " . htmlentities($_POST['users_name']). " bestaat al";
			}
			// if (preg_match("/\\s/", $_POST['users_name']) === true) {
			// 	$errors[]="Uw gebruikersnaam mag geen spatie inhouden";
			// }
			if (strlen($_POST['users_name']) > 25) {
				$errors[]="Uw gebruikersnaam is te lang";
			}
			if (strlen($_POST['users_password']) > 25) {
				$errors[]="De wachtwoord is te lang";
			}
			if (strlen($_POST['users_password']) < 6 ) {
				$errors[]="u moet een langer wachtwoord invullen";
			}
			if ($_POST['users_password'] !== $_POST['password_again']) {
				$errors[]="wachtwoord match niet";
			}
			if (strlen($_POST['users_telefoon']) > 11) {
				$errors[]="Uw telefoon nummer is niet correct ";
			}
		}	
	}

	//print_r($errors);
?>