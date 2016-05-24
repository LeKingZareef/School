<?php 
include '../../core/init.php';
include '../../includes/checklogin.php';

if (empty($_POST) === false) {
	if (empty($_POST) === false) {
		$verplichte_velden = array('users_name', 'users_achternaam', 'users_gebdatum', 'users_email', 'users_telefoon', ); 
		//echo '<pre>', print_r($_POST, true), '</pre>';
		foreach ($_POST as $key => $value) {
			if (empty($value) && in_array($key, $verplichte_velden) === true) {
				$errors[] = "alle velden zijn verlicht in te vullen behalve about me";
				break 1;
			} 	
		}
	}
}
?>
<?php
	if (empty($_POST) === false && empty($errors) === true) {
		 $update_data =array(
		 	'users_name' => $_POST['users_name'],
		 	'users_achternaam' => $_POST['users_achternaam'],
		 	//'users_password' => $_POST['users_password'],
		 	'users_gebdatum' => $_POST['users_gebdatum'],
		 	//'users_email' => $_POST['users_email'],
		 	'users_telefoon' => $_POST['users_telefoon'],
		 	'users_about' => $_POST['users_about']
		 	);

		 	update_users($update_data);
		 	header('Location: ../../profile.php');
		 	exit();

		 print_r($update_data);
	} else if (empty($errors) === false) {
		echo output_errors($errors);
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Gegevens Wijzigen</title>

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
				<div class="panel-heading">Gegevens Wijzigen</div>
				<div class="panel-body">
					<form role="form" action="" method="post" autocomplete="off">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="users_name" type="text" autofocus="" value="<?php echo $users_data['users_name'];?>">
							</div>

							<div class="form-group">
								<input class="form-control" placeholder="Achternaam" name="users_achternaam" type="text" value="<?php echo $users_data['users_achternaam'];?>">

							</div>

							<div class="form-group">
							    <div class="input-group date" id="datetimepicker2">
							        <input class="form-control" placeholder="Geboortedatum" name="users_gebdatum" type="text" value="<?php echo $users_data['users_gebdatum'];?>">
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
							
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="users_email" type="text" value="<?php echo $users_data['users_email'];?>">
							</div>

							<div class="form-group">
								<!--zorg ervoor dat er alleen nummers hier ingevuld kan worden.!-->
								<input class="form-control" placeholder="Telefoon" name="users_telefoon" type="text" value="<?php echo $users_data['users_telefoon'];?>">
							</div>

							<div class="form-group">
								<input class="form-control" placeholder="About" name="users_about" value="<?php echo $users_data['users_about'];?>">
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
