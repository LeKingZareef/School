    

    <script src="assets/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
<?php
include 'config.php';

if (isset($_POST["add"])) {
	
    if(isset($_POST["keuring_id"]) && !empty($_POST["keuring_id"]) &&
      	isset($_POST["keuring_kentken"]) && !empty($_POST["keuring_kentken"]) &&
		isset($_POST["keuring_chasisnummer"]) && !empty($_POST["keuring_chasisnummer"]) &&
		isset($_POST["keuring_model"]) && !empty($_POST["keuring_model"]) &&
    	isset($_POST["keuring_merk"]) && !empty($_POST["keuring_merk"]) &&
    	isset($_POST["keuring_datum"]) && !empty($_POST["keuring_datum"]) &&
    	isset($_POST["keuring_vervaldatum"]) && !empty($_POST["keuring_vervaldatum"])){
            
            $keuring_id=$_POST["keuring_id"];
            $keuring_kentken=$_POST["keuring_kentken"];
            $keuring_chasisnummer=$_POST["keuring_chasisnummer"];
            $keuring_model=$_POST["keuring_model"];
            $keuring_merk=$_POST["keuring_merk"];
            $keuring_datum=$_POST["keuring_datum"];
            $keuring_vervaldatum=$_POST["keuring_vervaldatum"];

//             echo $naam_form ; 
//             echo $voornaam_form;
//             echo $straatnaam_form ;
//             echo $telefoonnumer_form;
//             $sql = "INSERT INTO sleepdienst (auto, kenteken_nr, category, kosten, sleepplaats, opslagplaats, Status)
//             VALUES ('$auto', '$kenteken_nr', '$category', '$kosten', '$sleepplaats', '$opslagplaats', '$status')";
 
			
		
//              if ($conn->query($sql) === TRUE) {
//                //echo " ";
// 			   	 ?>
//                  <script>
//       swal(
//   'Success!',
//   'Sucessvol opgeslagen',
//   'success'
// )
//         </script>                 
//                  <?php
			
//              }else{
//                     echo "Error: " . $sql . "<br>" . $conn->error;
//                 }

//     }else {
//         ?>
//         <script>
//           swal(
//   'Let op !',
//   'Vul alle velden in',
//   'warning'
// )
//                   </script>
//         <?php
//     }//lege velden else
   
// }else{
// 	// echo "druk submit";
// }
// $conn->close();
// ?>