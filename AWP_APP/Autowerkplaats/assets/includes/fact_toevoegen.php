<link rel="stylesheet" href="assets/sweetallert/sweetalert2.min.css">
 <script src="assets/sweetallert/sweetalert2.min.js"></script>
<?php
include 'config.php';

if (isset($_POST["add"])) {
	
    if(isset($_POST["klantnaam"]) && !empty($_POST["klantnaam"]) 
   
  ){
            
            $naam_form=$_POST["klantnaam"];
            $username_form=$_POST["telefoon"];
            $wachtw_form=$_POST["werknemer"];
            $voornaam_form=$_POST["datum"];
            $geboortedatum_form=$_POST["gew_man"];
            $adres_form=$_POST["uit_werk"];
            $telefoonnumer_form=$_POST["prijs"];
            $date= date("Y-m-d");
            $product_number = $_POST['product_number'];
            $product_aantal = $_POST['product_aantal'];

            // echo $naam_form ; 
            // echo $voornaam_form;
            // echo $straatnaam_form ;
            // echo $telefoonnumer_form;
            $sql = "INSERT INTO auto_rep (klant_naam, telefoon_nummer, werknemer, datum, gew_manuur, uitg_werkz, prijs)
            VALUES ('$naam_form', '$username_form' , '$wachtw_form', '$voornaam_form', '$geboortedatum_form', '$adres_form', 
			     '$telefoonnumer_form')";
		
             if ($conn->query($sql) === TRUE) {
               
             $sql2 = "SELECT * FROM product";
             $result = $conn->query($sql2);
                if ($result->num_rows > 0) {
                   while ($row = $result->fetch_assoc()) {
                    $product_aantal2 = $row['product_aantal'];

                    $product_result = $product_aantal2-$product_aantal;

                    $slq3 = "UPDATE `product` SET `product_aantal` = '$product_result' WHERE `product_number` = '$product_number'";
                    $result2 = $conn->query($slq3);

                    // header("Location: ../fact_bew.php");
                 }
               }
			   	 ?>
                 <script>
                  swal(
                    'Succes!',
                    'Factuur Opgeslagen en uitgeprint.',
                    'success'
                  )

                  window.location = "fact_bew.php";

                 </script>                 
                 <?php
             }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

    }else {
        ?>
        <script>
          swal(
  'Let op!',
  'U heeft niet alle velden ingevuld',
  'warning'
)
        </script>
        <?php
    }//lege velden else
   
}else{
	// echo "druk submit";
}
$conn->close();
?>