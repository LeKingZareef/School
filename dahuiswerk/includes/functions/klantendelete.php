<?php

if (isset($_POST["button_delete"])) {
	
	if (isset($_POST["id_to_delete"]) && !empty($_POST["id_to_delete"])) {
		$to_delete_id_var = $_POST["id_to_delete"];

		$sql = mysql_query("DELETE FROM klant WHERE klant_id=$to_delete_id_var");

		echo '<a href="../../klantenpage.php">Terug</a>';

	} 
	    else {
	    echo "Error: " . $sql . "<br>";
		}
}else{
	echo "Er is geen waarde aan gegeven";
}
	
?>