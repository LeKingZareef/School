<?php 
if (logged_in() === true) {
	
} else {
	header('Location: includes/widget/login.php');
}
?>
