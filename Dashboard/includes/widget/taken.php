<?php include '../../core/init.php';?>
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
				<div class="panel-heading">Taak Toewijzen</div>
				<div class="panel-body">
					<?php 
						if (isset($_POST["btninsert"])) {
								
								$taken_naam = $_POST['taken_naam'];
								$taken_beschrijving = $_POST['taken_beschrijving'];
								$projecten_id = $_POST['projecten_id'];
								$users_id = $_POST['users_id'];

								mysql_query("INSERT INTO `taken` ( taken_naam, taken_beschrijving) 
									VALUES ( '$taken_naam', '$taken_beschrijving')");
								mysql_query("INSERT INTO `projecten_taken_users` (taken_naam, projecten_naam, users_name) 
									VALUES ( '$taken_naam' ,'$projecten_id', '$users_id')");
							

								header('Location: ../../projecten.php' );
								exit();

							}
					?>
					<form role="form" action="" method="post" autocomplete="off">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Taak Naam" name="taken_naam" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Taak Beschrijving" name="taken_beschrijving" type="text" value="">
							</div>
							<!-- <div class="form-group">
								<input class="form-control" placeholder="Werker" name="users_id" type="text" value="">
							</div> -->
							<div class="form-group">
								<label>Werker</label>
								<select class="form-control" name="users_id">
									<?php
										$sql = mysql_query("SELECT * FROM users WHERE users_type = 'Werknemer'");
										while ($row = mysql_fetch_array($sql)){
											$users_list = $row['users_name'];
											echo "<option>" . $users_list . "</option>" ;
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<label>Project</label>
								<select class="form-control" name="projecten_id">
									<?php
										$sql = mysql_query("SELECT * FROM projecten WHERE projecten_status = 'active'");
										while ($row = mysql_fetch_array($sql)){
											$projecten_list = $row['projecten_naam'];
											echo "<option>" . $projecten_list . "</option>" ;
										}
									?>
								</select>
							</div>
							<a href="projecten.php"><input class="btn btn-primary" type="submit" value="Save" name="btninsert"></a>
							<a href="../../projecten.php" class="btn btn-primary">Back<a>
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
