<?php 
	include 'functions.php';
	// if (isset($_POST['username'], $_POST['password'], $_POST['remember'])) {
	// 	$users_name=$_POST['users_username'];
	// 	$users_password=$_POST['users_password'];
	// 	$remember=$_POST['remember'];

	// 	if ($users_username&&$users_password) {
	// 		$login = mysql_query("SELECT * FROM users WHERE users_name= '$users_name' ");

	// 		if (mysql_num_rows($login)) {
	// 			while ($row = mysql_fetch_assoc($login)) {
	// 				$check_password = $row['users_password'];
	// 				if ($users_password==$check_password) {
	// 					$loginok = TRUE;
	// 				} else {
	// 					echo "Error";
	// 					exit();
	// 				}

	// 				if ($loginok == TRUE) {
	// 					if ($remember == "yes") {
	// 						setcookie("users_name", $users_username, time()+7600);
	// 						header("Location: index.php");
	// 						exit();
	// 					}
	// 					else if ($remember=="") {
	// 						$_SESSION['users_name']=$users_name;
	// 						header("Location: index.php");
	// 						exit();
	// 					}
	// 				}
	// 			}
	// 		} else {
	// 			echo "Error";
	// 		}
	// 	}
	// } 
	// else
	// {
	// 	die("Type wachtwoord en gebruikers naam weer ");
	// }

if (loggedin()) {
	header("Location:index.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Login</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form role="form" action = "loginaction.php" method="post" autocomplete="off">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="users_name" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="users_password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="yes">Remember Me
								</label>
							</div>
							<input class="btn btn-primary" type="submit" value="Log In" name="login">
							<a href="signup.php" class="btn">Sign Up</a>
							<br><br>
						<!-- 	<?php echo $error; ?> -->
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
