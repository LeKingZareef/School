<?php
include 'config.php';

if (isset($_POST["zoek"])) {
	
  echo   "
               <tr>
                                  <td></td>
                                  <td class='hidden-phone'></td>
                                  <td></td>
                                  <td></td>
                                 
                              </tr>";
  }
  else
{
       include 'config_zoekaut.php';

    }//lege velden else
   


$conn->close();
?>