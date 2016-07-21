<?php
include 'config.php';

if (!isset($_POST["zoek"])) {
	
  include 'geschoproep_allevoertuigen.php';
  }
  else
{
       include 'zoeken.php';

    }//lege velden else
   


function __destruct() {
	$this->close();
 }
?>