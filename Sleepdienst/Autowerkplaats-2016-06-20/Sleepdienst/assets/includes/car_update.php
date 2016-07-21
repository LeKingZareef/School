<?php include 'config.php';

 if (isset($_POST["update_car"])) {
	
    if(isset($_POST["kenteken_nr"]) && !empty($_POST["kenteken_nr"]) &&
      isset($_POST["auto"]) && !empty($_POST["auto"]) &&
     isset($_POST["klant"]) && !empty($_POST["klant"]) &&
	isset($_POST["category"]) && !empty($_POST["category"]) &&
	isset($_POST["kosten"]) && !empty($_POST["kosten"]) &&
    isset($_POST["sleepdienst"]) && !empty($_POST["sleepdienst"]) &&
    isset($_POST["opslagplaats"]) && !empty($_POST["opslagplaats"]) &&
    isset($_POST["status"]) && !empty($_POST["status"])
    
  ){
            
            $auto=$_POST["auto"];
        	$klant=$_POST["klant"];
            $kenteken_nr=$_POST["kenteken_nr"];
            $category=$_POST["category"];
            $kosten=$_POST["kosten"];
            $sleepplaats=$_POST["sleepdienst"];
            $opslagplaats=$_POST["opslagplaats"];
            $status=$_POST["status"];
      

            // echo $naam_form ; 
            // echo $voornaam_form;
            // echo $straatnaam_form ;
            // echo $telefoonnumer_form;
            $sql = "UPDATE sleepdienst SET kenteken_nr='$kenteken_nr', auto='$auto', klant='$klant', category='$category', kosten='$kosten', sleepplaats='$sleepplaats', opslagplaats='$opslagplaats', Status= '$status' WHERE kenteken_nr = '$kenteken_nr'";
			
		
             if ($conn->query($sql) === TRUE) {
              header("Location: ../../voertuig_ophalen.php")
               //echo " ";
			   	 ?>
                 <script>
      swal(
  'Success!',
  'Sucessvol opgeslagen',
  'success'
)
        </script>                 
                 <?php
			
             }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

    }else {
        ?>
        <script>
          swal(
  'Let op !',
  'Vul alle velden in',
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
