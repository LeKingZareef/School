<?php 
include '../../core/init.php';
require '../../core/database/connect.php';
?>

<?php include '../../includes/checklogin.php';?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Nieuw Project</title>

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
				<div class="panel-heading">Nieuw Project</div>
				<div class="panel-body">
					<?php 
						
						if (isset($_POST["btninsert"])) {

							if (empty($_POST['projecten_naam']) /*|| empty($_POST['projecten_owner'])*/ || empty($_POST['projecten_beschrijving']) /*|| empty($_POST['projecten_start'])*/ || empty($_POST['projecten_einde'])) 
							{
								//echo "No Data";
								echo "Vul alle velden in!";
							}
							else
							{
								
								$project_naam = $_POST['projecten_naam'];
								//$projecten_owner = $_POST['projecten_owner'];
								$projecten_owner = $users_data['users_name'];
								$projecten_beschrijving = $_POST['projecten_beschrijving'];
								//$projecten_start = $_POST['projecten_start'];
								$projecten_einde = $_POST['projecten_einde'];

								//afgerond auto:
	                              $date_current = date("Y/m/d");
	                              // echo "$date_current";
	                              $date_einde = $projecten_einde;                

	                              if(strtotime($date_current) >= strtotime($date_einde))
	                              {                             
	                              	$projecten_status = 'afgerond';
	                              }else{
	                              	$projecten_status = 'active';
	                              }
								//afgerond auto

								// mysql_query("INSERT INTO `projecten` ( projecten_naam, projecten_owner, projecten_beschrijving, projecten_start, projecten_einde ) 
								// 	VALUES ( '$project_naam', '$projecten_owner', '$projecten_beschrijving', '$projecten_start', '$projecten_einde' )");
								mysql_query("INSERT INTO `projecten` ( projecten_naam, projecten_owner, projecten_beschrijving, projecten_einde, projecten_status ) 
									VALUES ( '$project_naam', '$projecten_owner', '$projecten_beschrijving', '$projecten_einde', '$projecten_status' )");


								header('Location: ../../projecten.php' );
								exit();

							}

						}

					?>
					<form role="form" action="" method="post" autocomplete="off">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Project Naam" name="projecten_naam" type="text" autofocus="" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Project Eigenaar" name="projecten_owner" id="disabledInput" type="text" value="<?php echo $users_data['users_name'];?>" disabled>
							</div>
							<!-- <div class="form-group">
								<input class="form-control" placeholder="Projecten Start Datum" name="projecten_start" type="text" value="">
							</div> -->
							<div class="form-group">
							    <div class="input-group date" id="datetimepicker3">
							        <input class="form-control" placeholder="Projecten Eind Datum" name="projecten_einde" type="text">
							            <span class="input-group-addon">
							                <span class="glyphicon glyphicon-calendar"></span>
							            </span>
							    </div>
							</div>
							<script type="text/javascript">
							    $(function () {
							        $('#datetimepicker3').datetimepicker({
							        	format: 'YYYY-MM-DD'
							        });
							    });
							</script>
							<div class="form-group">
								<textarea class="form-control" placeholder="Project Beschrijving" rows="3" name="projecten_beschrijving"></textarea>
							</div>

							<a href="newproject.php"><input class="btn btn-primary" name="btninsert" type="submit" value="Save"></a>
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
