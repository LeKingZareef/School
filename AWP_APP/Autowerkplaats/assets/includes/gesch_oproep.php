<?php 
include 'config.php';
$nama="(+597)";
    $sql = "SELECT * FROM auto_rep ORDER BY factuur_id DESC ";
                                        $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {  
                                                while($row = $result->fetch_assoc()) {
													$id_delete_n=$row["factuur_id"];
													$naam_form=$row["klant_naam"];
													$voornaam_form=$row["telefoon_nummer"];
													$geboortedatum_form=$row["werknemer"];
									
        echo   "
        			 <tr>
                                  <td>".$id_delete_n." </td>
                                  <td class='hidden-phone'>".$naam_form." </td>
                                  <td>".$nama. " ".$voornaam_form." </td>
                                  <td>".$geboortedatum_form."</td>
                                  <td>
                                      <button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button>
                                      <button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>
                                      <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o' ></i></button>
                                  </td>
                              </tr>";


        										}	
												}	
                                                
                                             else {
												
                                            echo "<p class='category'>Oeps er zijn geen managers vastgelegd</p>";
                                            }
													
?>