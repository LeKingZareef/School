<?php
include 'config.php';

if (isset($_POST["add"])) {
	
    if(isset($_POST["klantnaam"]) && !empty($_POST["klantnaam"]) &&
    isset($_POST["telefoon"]) && !empty($_POST["telefoon"]) && 
	isset($_POST["werknemer"]) && !empty($_POST["werknemer"]) &&
	isset($_POST["gew_man"]) && !empty($_POST["gew_man"]) &&
    isset($_POST["datum"]) && !empty($_POST["datum"]) &&
    isset($_POST["uit_werk"]) && !empty($_POST["uit_werk"]) &&
	isset($_POST["prijs"]) && !empty($_POST["prijs"]) 
   
  ){
            
            $naam_form=$_POST["klantnaam"];
         $username_form=$_POST["telefoon"];
          $wachtw_form=$_POST["werknemer"];
            $voornaam_form=$_POST["datum"];
            $geboortedatum_form=$_POST["gew_man"];
            $adres_form=$_POST["uit_werk"];
            $telefoonnumer_form=$_POST["prijs"];
            $date= date("Y-m-d");
           
         

            // echo $naam_form ; 
            // echo $voornaam_form;
            // echo $straatnaam_form ;
            // echo $telefoonnumer_form;
            $sql = "INSERT INTO auto_rep (klant_naam, telefoon_nummer, werknemer, datum, gew_manuur, uitg_werkz, prijs)
            VALUES ('$naam_form', '$username_form' , '$wachtw_form', '$voornaam_form', '$geboortedatum_form', '$adres_form', 
			'$telefoonnumer_form')";
 
			
		
             if ($conn->query($sql) === TRUE) {
               //echo " ";
			   	 ?>
                 <script>
            alert("Succes");
        </script>                 
                 <?php
			
             }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

    }else {
        ?>
        <script>
            alert("u heeft niet alle velden ingevuld");
        </script>
        <?php
    }//lege velden else
   
}else{
	// echo "druk submit";
}
$conn->close();
?>