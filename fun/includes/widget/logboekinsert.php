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
<title>BMD - Nieuw Logboek</title>

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
				<div class="panel-heading">Nieuw Logboek</div>
				<div class="panel-body">
					<?php 
						if (isset($_POST["btninsert"])) {

							if (empty($_POST['invul_datum'])) 
							{
								echo "Vul alle velden in!";
							}
							else
							{
								$logboek_invul_datum = $_POST['invul_datum'];
								$users_name = $users_data['users_name'];
								$users_id = $users_data['users_id'];
								$taken_naam = $_POST['taken_naam']; 
								$verrichtte_werkzaamheden = $_POST['verrichtte_werkzaamheden']; 
								$aantal_uren = $_POST['aantal_uren'];
								$opmerking = $_POST['opmerking'];

								mysql_query("INSERT INTO `logboek` ( invul_datum, users_name, users_id, taken_naam, verrichtte_werkzaamheden, aantal_uren, opmerking ) 
									VALUES ( '$logboek_invul_datum', '$users_name', '$users_id', '$taken_naam', '$verrichtte_werkzaamheden', '$aantal_uren', '$opmerking' )");

								$taken_status = $_POST['taken_status'];
								$checkbox = $_POST['checkbox'];
								$taken_naam = $_POST['taken_naam'];
								//echo "UPDATE `projecten_taken_status` SET taken_status = '$checkbox' WHERE taken_naam='$taken_naam'";
								mysql_query("UPDATE `projecten_taken_users` SET taken_status = '$checkbox' WHERE taken_naam = '$taken_naam' ");
								header('Location: ../../logboek.php' );
								exit();
							}

						}

					?>
					<form role="form" action="" method="post" autocomplete="off">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="User Naam" name="users_name" id="disabledInput" type="text" value="<?php echo $users_data['users_name'];?>" disabled>
							</div>
							<div class="form-group">
								<label>Taken</label>
								<select class="form-control" name="taken_naam">
									<?php
										$usersname = $users_data['users_name'];
										$sql = mysql_query("SELECT * FROM projecten_taken_users WHERE taken_status = 'active' AND users_name ='$usersname'");
										while ($row = mysql_fetch_array($sql)){
											$taken_list = $row['taken_naam'];
											echo "<option>" . $taken_list . "</option>" ;
										}
									?>
								</select>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value="afgerond" name="checkbox">Afgerond</label>
							  <label><input type="checkbox" value="active" name="checkbox">Pending</label>
							</div>
							<div class="form-group">
							    <div class="input-group date" id="datetimepicker3">
							        <input class="form-control" placeholder="Invul Datum" name="invul_datum" type="text">
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
								<textarea class="form-control" placeholder="Verrichtte Werkzaamheden" rows="3" name="verrichtte_werkzaamheden"></textarea>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Aantal Uren" name="aantal_uren" type="text" value="">
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Opmerking" rows="3" name="opmerking"></textarea>
							</div>
							<a href="logboekinsert.php"><input class="btn btn-primary" name="btninsert" type="submit" value="Save"></a>
							<a href="../../logboek.php" class="btn btn-primary">Back<a>
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
