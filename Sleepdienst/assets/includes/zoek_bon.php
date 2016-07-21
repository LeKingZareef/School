<?php
include 'config.php';

if (isset($_POST["zoek"])) {
	
  echo   "
               <tr>
                                  <td></td>
                                  <td class='hidden-phone'></td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                      <button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button>
                                      <button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>
                                      <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o' ></i></button>
                                  </td>
                              </tr>";
  }
  else
{
       include 'geschoproep_allevoertuigen.php';

    }//lege velden else
   


$conn->close();
?>