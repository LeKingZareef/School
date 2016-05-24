<?php include 'core/init.php';?>
<?php include 'includes/checklogin.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Profile</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/moment-with-locales.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>

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
			<li class="active"><a href="profile.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Profile</a></li>
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
				<h1 class="page-header">Profile</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Profiel Foto</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
						<?php
							if(isset($_FILES['fileToUpload'])) {
								//echo "Ok!";
								if (empty($_FILES['fileToUpload']['name']) === true) {
									echo "<p>";
									echo "Kiez een bestand!";
									echo "</p>";
								} else {
									//echo "Ok!";
									$allowed = array('jpg', 'jpeg', 'gif', 'png');

									$file_name = $_FILES['fileToUpload']['name'];
									$file_extn = strtolower(end(explode('.', $file_name)));
									$file_temp = $_FILES['fileToUpload']['tmp_name'];

									if (in_array($file_extn, $allowed) === true) {
										//Upload the file:
										change_profile_image($session_user_id, $file_temp, $file_extn);
										header('Location: profile.php');
										exit();
									} else {
										echo "<p>";
										echo "Onjuist bestandstype! Wel toegestaan: ";
										echo implode(', ', $allowed);
										echo "</p>";
									}
								}
							}
							
							if (empty($users_data['users_profile']) === false) {
								echo "<p>";
								echo '<img class="profile" src="', $users_data['users_profile'],'" alt="', $users_data['users_name'],'\'s Profile Images"> ';
								echo "</p>";
							}

							?>
							<form action="" method="post" enctype="multipart/form-data">
							    <p><input type="file" name="fileToUpload" id="fileToUpload"></p>
							       <input class="btn btn-primary" type="submit" value="Upload" name="submit">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Gegevens</div>
					<div class="panel-body">
						<div class="canvas-wrapper">

							<?php include 'includes/aside.php';?>

							<a class="btn btn-primary" href="includes/widget/setting.php">Gegevens Wijzigen</a>
							<?php if ($users_data['users_type'] === 'Manager') {
									echo " &nbsp; <a class='btn btn-primary' href='includes/widget/signup.php'>Gebruikers Toevoegen</a>";
									//&nbsp; <a class='btn btn-primary' href='userslist.php'>Gebruikers Overzicht</a>
									}
							?>

						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<?php if ($users_data['users_type'] === 'Manager') {
					include 'userslist.php';
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
	<script>
		$('#calendar').datepicker({
		});

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
