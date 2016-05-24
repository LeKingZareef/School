<?php 
include 'core/init.php';
include 'includes/checklogin.php' ;
include 'includes/head.php';

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

		// if (empty($errors) === true) {
		// 	if ($users_data['users_email'] == $_POST['users_email']) {
		// 		$errors[]='Invalid email';
		// 	}
		// }
	}
}
?>

<h2>Edit</h2>
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
		 	header('Location: profile.php');
		 	exit();

		 print_r($update_data);
	} else if (empty($errors) === false) {
		echo output_errors($errors);
	}
?>
<form role="form" action="" method="post" autocomplete="off">
	<fieldset>
		<div class="form-group">
							<input class="form-control" placeholder="Username" name="users_name" type="text" autofocus="" value="<?php echo $users_data['users_name'];?>">
							</div>
							<div class="form-group">
							<!-- <div class="form-group">
								<input class="form-control" placeholder="Password" name="users_password" type="password" value="">
							</div> -->
							<!-- <div class="form-group">
								<label>Functie</label>
								<select class="form-control" name="users_type">
									<option>Manager</option>
									<option>Werknemer</option>
								</select>
							</div> -->
							<div class="form-group">
								<input class="form-control" placeholder="Achternaam" name="users_achternaam" type="text" value="<?php echo $users_data['users_achternaam'];?>">
							</di>
							<!-- <div class="form-group">
								<input class="form-control" placeholder="Geboortedatum" name="users_gebdatum" type="text" value="">
							</div> -->
							<div class="form-group">
							    <div class="input-group date" id="datetimepicker1">
							        <input class="form-control" placeholder="Geboortedatum" name="users_gebdatum" type="text" value="<?php echo $users_data['users_gebdatum'];?>">
							                <span class="glyphicon glyphicon-calendar"></span>
							            </span>
							    </div>
							</div>
							<script type="text/javascript">
							    $(function () {
							        $('#datetimepicker1').datetimepicker({
							        	format: 'YYYY-MM-DD'
							        });
							    });
							</script>
							<!-- <div class="radio">
								<label>
									<input type="radio" name="users_type" id="optionsRadios1" value="option1">Man
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="users_type" id="optionsRadios2" value="option2">Vrouw
								</label>
							</div> -->
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="users_email" type="text" value="<?php echo $users_data['users_email'];?>">
							</div>
							<div class="form-group">
								<!--zorg ervoor dat er alleen nummers hier ingevuld kan worden.!-->
								<input class="form-control" placeholder="Telefoon" name="users_telefoon" type="text" value="<?php echo $users_data['users_telefoon'];?>">
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="About" rows="3" name="users_about" value="<?php echo $users_data['users_about'];?>"></textarea>
							</div>
							<a href="signup.php"><input class="btn btn-primary" type="submit" value="Update"></a>
							<a href="profile.php" class="btn btn-primary">Back</a>
						</fieldset>
					</form>