<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Error</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand"><span>BMD</span> Dashboard</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	
	<div class="col-sm-7 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">	
			<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">BMD Error</div>
					<div class="panel-body">
						<div class="canvas-wrapper">

							<div class="alert bg-danger" role="alert">
								<?php
								include 'core/init.php';
								//include 'includes/head.php';
								//include 'includes/header.php'; 	
								//Check of de gebruikker bestaat
								// if (users_bestaat("Zareef") == true){
								// 	echo "bestaat";
								// } else {
								// 	echo "string";
								// }
								// die();

								if (empty($_POST) == false) {
									$users_name = $_POST['users_name'];
									$users_password = $_POST['users_password'];

									//echo $users_name, " ", $users_password;
									if (empty($users_name) ==  true || empty($users_password) == true) {
										$errors[] ='U heeft een van de vaken niet ingevuld'; 
									} elseif (users_bestaat($users_name) === false) {
										$errors[] ='Gebruiker bestaat niet!'; 
									} elseif (users_actief($users_name) === false) {
										$errors[] ='Gebruiker niet geactiveerd!'; 	
									} else {
										//is beter om dit te gebruiken in signup
										if (strlen($users_password) > 25) {
											$errors[] = "Password te lang";
										}

										$login = login($users_name, $users_password);
										if ($login === false) {
											$errors[] = 'Uw passwoord of gebruikers naam is incorrect';
										} else {
											//create session
											$_SESSION['users_id'] = $login;
											//redirect
											header('Location: index.php');

											exit();
										}
									}
								} else {
									header('Location: includes/widget/login.php');
								}
								if (empty($errors) == false) {
								?>
								<h4>Het is ons niet gelukt om u in te loggen want, </h4>
								<?php
									echo output_errors($errors);
								}
								?>
						</div>
							<a class="btn btn-primary" href="includes/widget/login.php">Try Again</a>
						</div>
					</div>
				</div>
			</div>
			</div>
	</div>	
	
		

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