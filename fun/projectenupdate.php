<?php
include 'core/init.php';
include 'includes/checklogin.php';
$id_to_fetch = $_POST['id_to_change'];
$sql = mysql_query("SELECT * FROM projecten WHERE projecten_id = $id_to_fetch");
$row = mysql_fetch_array($sql); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Gegevens Wijzigen</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!-- Date Picker -->
<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/moment-with-locales.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Project Wijzigen</div>
				<div class="panel-body">

					<form role="form" action="includes/widget/editproject.php" method="post" autocomplete="off">
						<fieldset>
							<div class="form-group">
								<input class="form-control" id="disabledInput" placeholder="Username" name="id" type="text" autofocus="" value="<?php echo $id_to_fetch ;?>">
							</div>

							<div class="form-group">
								<input class="form-control" placeholder="Achternaam" name="projecten_naam" type="text" value="<?php echo $row['projecten_naam'];?>">
							</div>

							<div class="form-group">
							    <div class="input-group date" id="datetimepicker2">
							        <input class="form-control" placeholder="Geboortedatum" name="projecten_start" type="text" value="<?php echo $row['projecten_start'];?>">
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
								<input class="form-control" placeholder="Email" name="projecten_owner" type="text" value="<?php echo $row['projecten_owner'];?>">
							</div>

							<div class="form-group">
								<!--zorg ervoor dat er alleen nummers hier ingevuld kan worden.!-->
								<input class="form-control" placeholder="Telefoon" name="projecten_einde" type="text" value="<?php echo $row['projecten_einde'];?>">
							</div>

							<div class="form-group">
								<textarea class="form-control" rows="5" id="" name="projecten_beschrijving">
									<?php echo htmlspecialchars($row['projecten_beschrijving']);?>
								</textarea>
							<!-- 	<input class="form-control" placeholder="About" name="projecten_beschrijving" value="<?php echo htmlspecialchars($row['projecten_beschrijving']);?>"> -->
							</div>

							<a href="projecten.php"><input class="btn btn-primary" type="submit" value="Save"></a>
							<a href="projecten.php" class="btn btn-primary">Back<a>
						</fieldset>
						<?php //include 'includes/widget/editproject.php';?>
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