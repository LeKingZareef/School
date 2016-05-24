<?php
if (isset($_POST['insert'])) {
	$auto_kenteken = $_POST['auto_kenteken'];
	$auto_model = $_POST['auto_model'];
	$auto_merk = $_POST['auto_merk'];
	$auto_bouwjaar = $_POST['auto_bouwjaar'];
	$auto_chasisnummer = $_POST['auto_chasisnummer'];
	$auto_deurs = $_POST['auto_deurs'];
	$auto_motor = $_POST['auto_motor'];

	if (!empty($auto_kenteken == "")) {
		echo "Naam mag niet leeg zijn <br>";
	}
	if (!empty($auto_model == "")) {
		echo "Adress mag niet leeg zijn <br>";
	}
	if (!empty($auto_merk == "")) {
		echo "Klant achternaam mag niet leeg zijn<br> ";
	}
	if (!empty($auto_bouwjaar == "")) {
		echo "Mobiel mag niet leeg zijn <br>";
	}
	if (!empty($auto_chasisnummer == "")) {
		echo "Geboorte datum mag niet leeg zijn <br>";
	}
	if (!empty($auto_deurs == "")) {
		echo "Bedrijf mag niet leeg zijn <br>";
	}
	if (!empty($auto_motor == "")) {
		echo "Bedrijf adres mag niet leeg zijn <br>";
	} else {

		$sql= mysql_query ("INSERT INTO auto (auto_kenteken, auto_model, auto_merk, auto_bouwjaar, auto_chasisnummer, auto_deurs, auto_motor) 
			VALUES ('$auto_kenteken', '$auto_model', '$auto_merk', '$auto_bouwjaar','$auto_chasisnummer', '$auto_deurs', '$auto_motor' )");
			echo "Toegevoegd";
	}  
		
}
?>