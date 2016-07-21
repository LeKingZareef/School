    

    <script src="assets/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
<?php
include 'config.php';

if (isset($_POST["add"])) {
	
    if(isset($_POST["kenteken_nr"]) && !empty($_POST["kenteken_nr"]) &&
      isset($_POST["auto"]) && !empty($_POST["auto"]) &&
     // isset($_POST["klant"]) && !empty($_POST["klant"]) &&
	isset($_POST["category"]) && !empty($_POST["category"]) &&
	isset($_POST["kosten"]) && !empty($_POST["kosten"]) &&
    isset($_POST["sleepdienst"]) && !empty($_POST["sleepdienst"]) &&
    isset($_POST["opslagplaats"]) && !empty($_POST["opslagplaats"])){
            
            $auto=$_POST["auto"];
            // $auto=$_POST["klant"];
            $kenteken_nr=$_POST["kenteken_nr"];
            $category=$_POST["category"];
            $kosten=$_POST["kosten"];
            $sleepplaats=$_POST["sleepdienst"];
            $opslagplaats=$_POST["opslagplaats"];
            $status="open";
      

            // echo $naam_form ; 
            // echo $voornaam_form;
            // echo $straatnaam_form ;
            // echo $telefoonnumer_form;
            $sql = "INSERT INTO sleepdienst (auto, kenteken_nr, category, kosten, sleepplaats, opslagplaats, Status)
            VALUES ('$auto', '$kenteken_nr', '$category', '$kosten', '$sleepplaats', '$opslagplaats', '$status')";
 
			
		
             if ($conn->query($sql) === TRUE) {
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