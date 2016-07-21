<?php 
	include "config.php";
	// include "hide.php";

	$sql = "SELECT * FROM sleepdienst ORDER BY sleep_id DESC ";

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			 $sleep_id = $row['sleep_id'];
			 $kenteken_nr = $row['kenteken_nr'];
			 $auto = $row['auto'];
			 $klant = $row['klant'];
			 $category = $row['category'];
			 $kosten = $row['kosten'];
			 $sleepplaats = $row['sleepplaats'];
			 $opslagplaats = $row['opslagplaats'];
			 $Status = $row['Status'];
			 // echo $sleep_id;
	 echo   "
<tr>
	<td>".$kenteken_nr."</td>
	<td>".$auto."</td>
	<td>".$category. "</td>
	<td>".$kosten."</td>
	<td>".$sleepplaats."</td>
	<td>".$opslagplaats."</td>
	<td>".$Status."</td>
	
</tr>
";

		
    }	
}else{
												
echo "
	<p class='category'>Oeps er zijn geen managers vastgelegd</p>
	";
  }
 ?>