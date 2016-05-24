<?php
 include 'signupaction.php';

if (empty($_POST) === false) {
	$nodige_velden = array('users_name', 'users_password','pasword_again','users_type','users_achternaam','users_gebdatum','users_geslacht','users_email','users_telefoon');
	foreach ($_POST as $key => $value) {
		if (empty($value) && in_array($key, $nodige_velden) === true) {
			$errors[] = 'Alle velden zijn verpicht in te vullen';
			break 1; 
		}
	}
}

	if (empty($errors) === true) {
		// if (strlen($_POST('users_passowrd'))<6)  {
		// 	$errors[] = 'Jou wachtwoord is te kort of te lang';
		// }
		if ($_POST['users_password'] !== $_POST['passowrd_again']) {
			$errors[] = 'Jou wachtwoord is voldoet niet';
		}
		if (preg_match("/\\s/", $_POST['users_password']) == true) {
			$errors[] = "Jou wachtwoord mag geen spatie hebben";
		}
	}

//print_r($errors);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Sign Up</title>

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
				<div class="panel-heading">Sign Up</div>
				<div class="panel-body">
					<form role="form" action="" method="post" autocomplete="off">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="users_name" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="users_password" type="password" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password Again" name="password_again" type="password" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Functie" name="users_type" type="text" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Achternaam" name="users_achternaam" type="text" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Geboortedatum" name="users_gebdatum" type="text" value="">
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="users_geslacht" id="optionsRadios1" value="option1">Man
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="users_geslacht" id="optionsRadios2" value="option2">Vrouw
								</label>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="users_email" type="text" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Telefoon" name="users_telefoon" type="text" value="">
							</div>
							<a href="signup.php"><input class="btn btn-primary" type="submit" value="Save"></a>
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
