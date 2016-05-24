<?php
include 'connection.php';

function user_bestaat ($users_name) {
	$users_name = sanitize ($users_name);
	return (mysql_result(mysql_query("SELECT COUNT ('users_id') FROM 'users' WHERE 'users_name' = '$users_name'"), 0) == 1) ? true: false;
}

?>