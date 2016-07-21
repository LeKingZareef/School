<?php 
include 'config.php';
if (isset($_POST["hide"])) {
    
    if(isset($_POST["sleep_id"])&& !empty($_POST["sleep_id"]) &&
     isset($_POST["status"])&& !empty($_POST["status"])
     ){
            
           
            $status=$_POST["status"];
            $sleep_id=$_POST["sleep_id"];

          
            $sql = "UPDATE sleepdienst SET  Status= '$status' WHERE sleep_id = '$sleep_id'";
            
        
             if ($conn->query($sql) === TRUE) {
               header("Location: ../../voertuig_ophalen.php");
              }
            else {
              echo "Error";
            }
      }
}
?>