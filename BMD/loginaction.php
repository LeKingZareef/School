<?php
	require 'connection.php';

	if (isset($_POST['username'], $_POST['password'], $_POST['remember'])) {

		$users_name=$_POST['users_username'];
		$users_password=$_POST['users_password'];
		$remember=$_POST['remember'];

		if ($users_username&&$users_password) {
			$login = mysql_query("SELECT * FROM users WHERE users_name= '$users_name' ");

			if (mysql_num_rows($login)) {
				while ($row = mysql_fetch_assoc($login)) {
					$check_password = $row['users_password'];
					if ($users_password==$check_password) {
						$loginok = TRUE;
					} else {
						echo "Error";
						exit();
					}

					if ($loginok == TRUE) {
						if ($remember == "yes") {
							setcookie("users_name", $users_username, time()+7600);
							header("Location: index.php");
							exit();
						}
						else if ($remember=="") {
							$_SESSION['users_name']=$users_name;
							header("Location: index.php");
							exit();
						}
					}
				}
			} else {
				echo "Error";
			}
		}
	} 
	else
	{
		die();
	}
?>