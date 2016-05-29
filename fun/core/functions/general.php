<?php
function manager_protect(){
	global $users_data;
	if ($users_data['users_type'] === 'Werknemer') {
		header('Location: index.php');
		exit();
	}
}

function array_sanitize (&$item){
	$item = mysql_real_escape_string($item);
}
function sanitize($data) {
	return mysql_real_escape_string($data);
}

function output_errors($errors) {
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
?>