<?php 
if (logged_in() === true) {
	include 'includes/widget/loggedin.php';
} else {
	header('Location: includes/widget/login.php');
}


?>