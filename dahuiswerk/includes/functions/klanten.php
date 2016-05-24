<?php
if (isset($_POST['insert'])) {
	$klant_naam = $_POST['klant_naam'];
	$klant_adres = $_POST['klant_adres'];
	$klant_achternaam = $_POST['klant_achternaam'];
	$klant_gebdatum = $_POST['klant_gebdatum'];
	$klant_mobiel = $_POST['klant_mobiel'];
	$klant_bedrijf = $_POST['klant_bedrijf'];
	$klant_bedrijfadres = $_POST['klant_bedrijfadres'];
	$klant_bedrijftelefoon = $_POST['klant_bedrijftelefoon'];

	if (!empty($klant_naam == "")) {
		echo "Naam mag niet leeg zijn <br>";
	}
	if (!empty($klant_adres == "")) {
		echo "Adress mag niet leeg zijn <br>";
	}
	if (!empty($klant_achternaam == "")) {
		echo "Klant achternaam mag niet leeg zijn<br> ";
	}
	if (!empty($klant_mobiel == "")) {
		echo "Mobiel mag niet leeg zijn <br>";
	}
	if (!empty($klant_gebdatum == "")) {
		echo "Geboorte datum mag niet leeg zijn <br>";
	}
	if (!empty($klant_bedrijf == "")) {
		echo "Bedrijf mag niet leeg zijn <br>";
	}
	if (!empty($klant_bedrijfadres == "")) {
		echo "Bedrijf adres mag niet leeg zijn <br>";
	}
	if (!empty($klant_bedrijftelefoon == "")) {
		echo "Bedrijftelefoon mag niet leeg zijn <br>";
	}else {

		$sql= mysql_query ("INSERT INTO klant (klant_naam, klant_adres, klant_achternaam, klant_gebdatum, klant_mobiel, klant_bedrijf, klant_bedrijfadres, klant_bedrijftelefoon ) 
			VALUES ('$klant_naam', '$klant_adres', '$klant_achternaam', '$klant_gebdatum','$klant_mobiel', '$klant_bedrijf', '$klant_bedrijfadres', '$klant_bedrijftelefoon' )");
			echo "Toegevoegd";
	}  
		
}
?>