<?php
include 'config.php';

if (!isset($_POST["zoek"])) {
	
  include 'gesch_oproep.php';
  }
  else
{
       include 'zoeken.php';

    }//lege velden else
   


function __destruct() {
	$this->close();
 }
?>