<?php include 'core/init.php';?>
<?php include 'includes/checklogin.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Projecten</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

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
			<li class="active"><a href="projecten.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Projecten</a></li>
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
				<h1 class="page-header">Projecten</h1>
			</div>
		</div><!--/.row-->

		<?php if ($users_data['users_type'] === 'Werknemer') {
					include 'projectenlist_werknemer.php';
				}
		?>
		<?php if ($users_data['users_type'] === 'Manager') {
			echo "
			<div class='row'>
				<div class='col-lg-12'>
					<div class='panel panel-default'>
						<div class='panel-heading'>
							Projecten Aanmaken
							<a class='btn btn-default glyphicon glyphicon-refresh icon-refresh pull-right' href='projecten.php'></a>
						</div>
						<div class='panel-body'>
							<div class='canvas-wrapper'>
								<a class='btn btn-primary' href='includes/widget/newproject.php'>Nieuw Project</a>
								<a class='btn btn-primary' href='includes/widget/taken.php'>Taak Toevoegen</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			";
		}?>
		<?php if ($users_data['users_type'] === 'Manager') {
					include 'projectenlist.php';
				}
		?>
			
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
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
