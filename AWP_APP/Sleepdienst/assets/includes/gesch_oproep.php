<?php 
	include "config.php";
	// include "hide.php";

	$sql = "SELECT * FROM sleepdienst WHERE  status='open' ORDER BY sleep_id DESC ";

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
	<td>

		<form action='assets/includes/update_car.php' method='POST'>
			<input name='sleep_id' value='$sleep_id' class='hidden'>
			<button src='assets/includes/update_car.php' name='update_dienst' class='btn btn-primary btn-xs'> <i class='fa fa-pencil'></i>
			</button>
		</form>
	</td>
	<td>
		<form action='assets/includes/hide.php' method='POST'>
			<button src='assets/includes/hide.php' name='hide' class='btn btn-success btn-xs'> <i class='fa fa-check'></i>
				<input name='sleep_id' value='$sleep_id' class='hidden'>
				<input name='status' value='betaald' class='hidden'></button>
		</form>

	</td>
</tr>
";

		
    }	
}else{
												
echo "
	<p class='category'>Oeps er zijn geen managers vastgelegd</p>
	";
  }
 ?>