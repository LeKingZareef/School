<?php include 'core/init.php';?>
<?php include 'includes/checklogin.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="info.php"><span>BMD</span> Dashboard</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $users_data['users_name']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="profile.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="sidebarlogo">BMD</li>
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="profile.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Profile</a></li>
			<li><a href="projecten.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Projecten</a></li>
			<li><a href="statistieken.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Statistieken</a></li>
			<li><a href="livechat.php"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg> Live Chat</a></li>
			<li><a href="logboek.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Logboek</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
		</ul>

	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						Profiel
					</div>
					<div class="panel-body">
						<?php
							if (empty($users_data['users_profile']) === false) {
								echo "<p>";
								echo '<img class="profile_index" src="', $users_data['users_profile'],'" alt="', $users_data['users_name'],'\'s Profile Images"> ';
								echo "</p>";
							}
						?>
						<?php include 'includes/aside.php';?>
					</div>
				</div>
			</div>
			
			<?php if ($users_data['users_type'] === 'Manager') {
			echo '
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						Projecten
					</div>
					<div class="panel-body">
					<div class="canvas-wrapper">
		              <div class="table-responsive">
		              <table class="table table-striped">
		                  <thead>
		                      <tr>
		                          <th>Projecten Naam</th>
		                          <th>Eind Datum</th>
		                          <th>Status</th>
		                      </tr>
		                  </thead>
		                  <tbody>
		    ';
							$owner = $users_data['users_name'];
	                          $sql = mysql_query("SELECT * FROM projecten WHERE projecten_owner = '$owner'");

	                          while ($row = mysql_fetch_array($sql)) {
	                              $projecten_naam = $row['projecten_naam'];
	                              $projecten_einde = $row['projecten_einde'];
	                              $projecten_status = $row['projecten_status'];

	                              echo "<tr>";
	                              echo "<td>$projecten_naam</td>";
	                              echo "<td>$projecten_einde</td>";
	                              echo "<td>$projecten_status</td>";
	                              echo "</tr>";
	                          }
			echo "
						 </tbody>
              			</table>
              			</div>
           			 </div>
					</div>
				</div>
			</div>
			";
			}
			?>

			<?php if ($users_data['users_type'] === 'Manager') {
			echo '
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Aantal Projecten:</h4>
						';
							$totaal_projecten = mysql_result(mysql_query("SELECT count(*) from projecten;"),0);
							$owner = $users_data['users_name'];
							$owner_projecten = mysql_result(mysql_query("SELECT count(*) from projecten WHERE projecten_owner = '$owner'"),0);
							$procent_projecten = ($owner_projecten / $totaal_projecten) * 100;
						echo '
						<div class="easypiechart" id="easypiechart-blue" data-percent="'; echo $procent_projecten; echo'"><span class="percent">'; echo $owner_projecten; echo'</span>
						</div>
					</div>
				</div>
			</div>
			';
			}
			?>

			<?php if ($users_data['users_type'] === 'Werknemer') {
			echo '
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						Projecten
					</div>
					<div class="panel-body">
					<div class="canvas-wrapper">
		              <div class="table-responsive">
		              <table class="table table-striped">
		                  <thead>
		                      <tr>
		                          <th>Projecten Naam</th>
		                          <th>Eind Datum</th>
		                      </tr>
		                  </thead>
		                  <tbody>
		    ';
		    				$owner = $users_data['users_name'];
							$sql = mysql_query("SELECT DISTINCT projecten_naam FROM projecten_taken_users WHERE users_name = '$owner'");

	                          while ($row = mysql_fetch_array($sql)) {
	                              // $taken_naam = $row['taken_naam'];
	                              $projecten_naam = $row['projecten_naam'];
	                              // $users_name = $row['users_name'];

	                              echo "<td>$projecten_naam</td>";
		                           	echo "<td>"; 
			                           	$sql2 = mysql_query("SELECT * FROM projecten WHERE projecten_naam = '$projecten_naam'");
										while ($row = mysql_fetch_array($sql2)) {
											$projecten_einde = $row['projecten_einde'];
												echo "$projecten_einde";
					               		};
				               		echo "</td>";
		                            echo "</tr>";
	                            }
			echo "
						 </tbody>
              			</table>
              			</div>
           			 </div>
					</div>
				</div>
			</div>
			";
			}
			?>

			<?php if ($users_data['users_type'] === 'Werknemer') {
			echo "
			<div class='col-md-4'>
				<div class='panel panel-default'>
					<div class='panel-heading'>
						Taken
					</div>
					<div class='panel-body'>
						 <table class='table table-striped'>
		                  <thead>
		                      <tr>
		                          <th>Taak Naam</th>
		                          <th>Taak Beschrijving</th>
		                          <th>Project</th>
		                      </tr>
		                  </thead>
		                  <tbody>
			";
	                          $sql = mysql_query("SELECT * FROM projecten_taken_users");

	                          while ($row = mysql_fetch_array($sql)) {
	                              $taken_naam = $row['taken_naam'];
	                              $projecten_naam = $row['projecten_naam'];
	                              $users_name = $row['users_name'];


	                              if ($users_name === $users_data['users_name'] ) {
	                              	echo "<tr>";
		                            echo "<td>$taken_naam</td>";
		                           	echo "<td>"; 
			                           	$sql2 = mysql_query("SELECT * FROM taken");
										// $row = mysql_fetch_array($sql);
										while ($row = mysql_fetch_array($sql2)) {
											$taken_beschrijving = $row['taken_beschrijving'];
											if ($taken_naam == $row['taken_naam']) {
												echo "$taken_beschrijving";
						                	}
					               		};
				               		echo "</td>";
		                            echo "<td>$projecten_naam</td>";
		                            echo "</tr>";
	                              }
	                            }
	        echo "
	                        </tbody>
              			</table>
					</div>
				</div>
			</div>
			";
			}?>

		</div>
			
	</div>	<!--/.main-->

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
