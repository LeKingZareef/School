<?php //include '../../core/functions/general.php';?>
<?php include '../../signupaction.php';?>
<?php //include '../includes/checklogin.php';?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Gebruikers Toevoegen</title>

<link href="../../css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/datepicker3.css" rel="stylesheet">
<link href="../../css/styles.css" rel="stylesheet">

<!-- Date Picker -->
<link href="../../css/bootstrap-datetimepicker.css" rel="stylesheet">
<script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../js/moment-with-locales.js"></script>
<script type="text/javascript" src="../../js/bootstrap-datetimepicker.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Gebruikers Toevoegen</div>
				<div class="panel-body">
					<?php 
						if (empty($_POST) === false && empty($errors) === true) {
							$signup_data= array (
									'users_name' 		=> $_POST['users_name'],
									'users_password' 	=> $_POST['users_password'],
									'users_type' 		=> $_POST['users_type'],
									'users_achternaam' 	=> $_POST['users_achternaam'],
									'users_gebdatum' 	=> $_POST['users_gebdatum'],
									'users_email' 		=> $_POST['users_email'],
									'users_telefoon' 	=> $_POST['users_telefoon'],
									'users_about' 		=> $_POST['users_about']
								);
								//print_r($signup_data);
								registreer_users($signup_data);
								header('Location: ../../profile.php' );
								exit();

						} elseif (empty($errors) === false) {
							echo output_errors($errors);
						}
					?>
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
							<!-- <div class="form-group">
								<input class="form-control" placeholder="Functie" name="users_type" type="text" value="">
								<select name="users_type">
								  <option value="manager">manager</option>
								  <option value="worker">worker</option>
								</select>
							</div> -->
							<div class="form-group">
								<label>Functie</label>
								<select class="form-control" name="users_type">
									<option>Manager</option>
									<option>Werknemer</option>
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Achternaam" name="users_achternaam" type="text" value="">
							</div>
							<!-- <div class="form-group">
								<input class="form-control" placeholder="Geboortedatum" name="users_gebdatum" type="text" value="">
							</div> -->
							<div class="form-group">
							    <div class="input-group date" id="datetimepicker2">
							        <input class="form-control" placeholder="Geboortedatum" name="users_gebdatum" type="text">
							            <span class="input-group-addon">
							                <span class="glyphicon glyphicon-calendar"></span>
							            </span>
							    </div>
							</div>
							<script type="text/javascript">
							    $(function () {
							        $('#datetimepicker2').datetimepicker({
							        	format: 'YYYY-MM-DD'
							        });
							    });
							</script>
							<!-- <div class="radio">
								<label>
									<input type="radio" name="users_type" id="optionsRadios1" value="option1">Man
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="users_type" id="optionsRadios2" value="option2">Vrouw
								</label>
							</div> -->
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="users_email" type="text" value="">
							</div>
							<div class="form-group">
								<!--zorg ervoor dat er alleen nummers hier ingevuld kan worden.!-->
								<input class="form-control" placeholder="Telefoon" name="users_telefoon" type="text" value="">
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="About" rows="3" name="users_about"></textarea>
							</div>
							<a href="signup.php"><input class="btn btn-primary" type="submit" value="Save"></a>
							<a href="../../profile.php" class="btn btn-primary">Back<a>
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
