<?php
function update_users($update_data) {
	global $session_user_id;
	$update = array();
	array_walk($update_data, 'array_sanitize');
	
	foreach ($update_data as $fields => $data) {
		$update[] ='`' . $fields . '` = \'' . $data . '\''; 
	}
	
	mysql_query("UPDATE `users` SET " . implode(', ', $update) . " WHERE `users_id` = $session_user_id");
}

function change_profile_image($user_id, $file_temp, $file_extn) {
	$file_path = 'images/profile/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
	echo $file_path;
	move_uploaded_file($file_temp, $file_path);
	mysql_query("UPDATE users SET `users_profile` = '$file_path' WHERE `users_id` = " . (int)$user_id);
}

function registreer_users($signup_data) {
	array_walk($signup_data, 'array_sanitize');
	//$signup_data['users_password'] = md5($signup_data['users_password']);

	$fields= '`' . implode('`,`', array_keys($signup_data)). '`';
	//echo $data;
	$data = '\'' . implode('\',\'', $signup_data). '\'' ;
	//echo $fields;
	// echo "INSERT INTO `users` ($fields) VALUES ($data)";
	// die();
	mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");
}


function users_data($users_id){

	$data = array();
	$users_id = (int)$users_id;

	$func_num_args = func_num_args();
	$func_get_args = func_get_args();

	if ($func_num_args > 1) {
		unset($func_get_args[0]);

		$fields = '`' . implode('`,`', $func_get_args) . '`';
		//echo "SELECT $fields FROM users WHERE `users_id` = '$users_id'";
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM users WHERE `users_id` = '$users_id'"));
		 //print_r($data);
		 //die();
		 //echo $fields;
		return $data;
	}
}

function logged_in() {
	return (isset($_SESSION['users_id'])) ? true : false;
}

function users_bestaat($users_name) {
	$users_name = sanitize($users_name);
	return (mysql_result(mysql_query("SELECT COUNT(`users_id`) FROM users WHERE `users_name`='$users_name'"), 0) == 1) ? true : false;
}

function users_actief($users_name) {
	$users_name = sanitize($users_name);
	return (mysql_result(mysql_query("SELECT COUNT(`users_id`) FROM users WHERE `users_name`='$users_name' AND `users_activeer`=1"), 0) == 1) ? true : false;
}

function users_id_from_usersname ($users_name) {
	$users_name = sanitize($users_name);
	return mysql_result(mysql_query("SELECT `users_id` FROM `users` WHERE `users_name` = '$users_name'"), 0, 'users_id');
}

function login($users_name, $users_password) {
	$users_id = users_id_from_usersname($users_name);

	$users_name = sanitize($users_name);
	//$users_password = md5($users_password);
	return (mysql_result(mysql_query("SELECT COUNT(`users_id`) FROM `users` WHERE `users_name` = '$users_name' AND `users_password` = '$users_password'"), 0) == 1) ? $users_id : false;
}
?>