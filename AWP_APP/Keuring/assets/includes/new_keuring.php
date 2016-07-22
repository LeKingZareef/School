    

    <script src="assets/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
<?php
include 'config.php';

if (isset($_POST["add"])) {
    if(
      	isset($_POST["keuring_kentken"]) && !empty($_POST["keuring_kentken"]) &&
		isset($_POST["keuring_chasisnummer"]) && !empty($_POST["keuring_chasisnummer"]) &&
		isset($_POST["keuring_model"]) && !empty($_POST["keuring_model"]) &&
    	isset($_POST["keuring_merk"]) && !empty($_POST["keuring_merk"]) 
    	
        ){
            
       
            $keuring_kentken=$_POST["keuring_kentken"];
            $keuring_chasisnummer=$_POST["keuring_chasisnummer"];
            $keuring_model=$_POST["keuring_model"];
            $keuring_merk=$_POST["keuring_merk"];
            $keuring_datum=$_POST["keuring_datum"];

            //$newEndingDate = $keuring_datum + "365 day" ;
            $newEndingDate = date('Y-m-d', strtotime('+1 years')); 

            ///$newEndingDate=date('Y-m-d', strtotime('+1 year', strtotime($startDate)) );
            // $newEndingDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($StaringDate)) . " + 1 year"));
            // $newEndingDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($StaringDate)) . " + 365 day"));
            // $newEndingDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($StaringDate)) . " + 365 day"));

            $sql = "INSERT INTO keuring ( keuring_kenteken, keuring_chasisnummer, keuring_model, keuring_merk, keuring_datum, keuring_vervaldatum)
          VALUES ( '$keuring_kentken', '$keuring_chasisnummer', '$keuring_model', '$keuring_merk', '$keuring_datum', '$newEndingDate')";
 
			
		
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