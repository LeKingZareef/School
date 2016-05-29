<?php
include '../../core/init.php';
if (empty($_POST) === false) {
	if (empty($_POST) === false) {
		$verplichte_velden = array('id', 'projecten_naam', 'projecten_owner', 'projecten_start', 'projecten_einde', ); 
		echo '<pre>', print_r($_POST, true), '</pre>';
		foreach ($_POST as $key => $value) {
			if (empty($value) && in_array($key, $verplichte_velden) === true) {
				$errors[] = "alle velden zijn verlicht in te vullen";
				//print_r($errors);
				break 1;

			} 
		}
	}
}
?>

<?php
	if (empty($_POST) === false && empty($errors) === true) {
			$projecten_id = $_POST['id'];
			$projecten_naam = $_POST['projecten_naam'];
			$projecten_start = $_POST['projecten_start'];
			$projecten_owner = $_POST['projecten_owner'];
			$projecten_einde = $_POST['projecten_einde'];
			$projecten_beschrijving = $_POST['projecten_beschrijving'];
			// echo "UPDATE `projecten` SET projecten_naam = '$projecten_naam', projecten_owner = '$projecten_owner', projecten_start = '$projecten_start', 
			// projecten_owner = '$projecten_owner', projecten_einde = '$projecten_einde', projecten_beschrijving = '$projecten_beschrijving'
			//  WHERE projecten_id = $projecten_id";
			$sql = mysql_query("UPDATE `projecten` SET projecten_naam = '$projecten_naam', projecten_owner = '$projecten_owner', projecten_start = '$projecten_start', 
			projecten_owner = '$projecten_owner', projecten_einde = '$projecten_einde', projecten_beschrijving = '$projecten_beschrijving'
			 WHERE projecten_id = $projecten_id");
		 	header('Location: ../../projecten.php');
		 	exit();

	} else if (empty($errors) === false) {
		echo output_errors($errors);
	}
?>