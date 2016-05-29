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
			<li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
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
				<h1 class="page-header">Info</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Het aanmaken van een nieuwe gebruiker:</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<img src="images/info/info1.png" alt="info1" width="100%"><br><br>
							Stap 1: Laat een manager inloggen.<br>
							Stap 2: Ga naar het tab "Profile".<br>
							Stap 3: Onder het kopje "Gegevens", druk op de knop "Gebruikers Toevoegen".<br>
							Stap 4: Vul de gegevens in van de nieuwe gebruikers.<br>
							*Let op geef aan of het een "Manager" of "Werknemer" account is.<br>
							Stap 5: Scroll naar het kopje "Gebruikers Overzicht", bij de nieuwe account druk op de knop "Activeren".
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Inloggen:</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<img src="images/info/info2.png" alt="info2" width="100%"><br><br>
							Stap 1: Vul je username in.<br>
							Stap 2: Vul je password in.<br>
							Stap 3: Klik op de knop "Log in".
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Profiel foto zetten:</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<img src="images/info/info3.png" alt="info3" width="100%"><br><br>
							Stap 1: Ga naar het tab "Profile".<br>
							Stap 2: Onder het kopje "Profiel Foto", druk op de knop "Choose File".<br>
							Stap 3: Kiez een foto bestand met als exstantie .jpg, .jpeg, .gif of .png.<br>
							Stap 4: Druk op de knop "Upload".
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Gegevens wijzigen:</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<img src="images/info/info4.png" alt="info4" width="100%"><br><br>
							Stap 1: Ga naar het tab "Profile".<br>
							Stap 2: Onder het kopje "Gegevens", druk op de knop "Gegevens Wijzigen".<br>
							Stap 3: Verander de gegevens die u wilt wijzigen en druk op de knop "Save".
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Nieuw project aanmaken:</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<img src="images/info/info5.png" alt="info5" width="100%"><br><br>
							Stap 1: Ga naar het tab "Projecten".<br>
							Stap 2: Onder het kopje "Projecten Aanmaken", druk op de knop "Nieuw Project".<br>
							Stap 3: Vul de gegevens van het project in en druk op de knop "Save".
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Nieuw taak aanmaken:</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<img src="images/info/info6.png" alt="info6" width="100%"><br><br>
							Stap 1: Ga naar het tab "Projecten".<br>
							Stap 2: Onder het kopje "Projecten Aanmaken", druk op de knop "Taak Toevoegen".<br>
							Stap 3: Vul de gegevens in, geef aan voor wie de taak is, geef aan voor welk project het is en druk op de knop "Save".
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Nieuw logboek aanmaken:</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<img src="images/info/info7.png" alt="info7" width="100%"><br><br>
							Stap 1: Ga naar het tab "Logboek".<br>
							Stap 2: Onder het kopje "Logboek Aanmaken", druk op de knop "Nieuw Logboek".<br>
							Stap 3: Vul de gegevens in, geef aan welk project je gewerkt hebt en druk op de knop "Save".
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
			
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
</body>

</html>
