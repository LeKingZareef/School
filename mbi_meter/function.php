<?php
if (!isset($_POST['button'])) {
		echo "Vul in";
}
else {

	function addBMI(){
		$gewicht_kilo = $_POST['gewicht'];
		$lengte_meter = $_POST['lengte'];

		if (!empty($gewicht_kilo) || !empty($lengte_meter))
		{
			global $resultaat;
			$resultaat = $gewicht_kilo/($lengte_meter*$lengte_meter);
			$resultaat = round($resultaat,2);
			return $resultaat;
			echo "$resultaat";
		}
		else
		{
			echo "Vull alle vakken in";
		}
	}
			echo addBMI();

	function bmi_range(){
		global $resultaat;
		if ($resultaat <= 18 )
		{
			echo "<br>Ondergewicht";
		}
		elseif ($resultaat > 18 || $resultaat <= 30 )
		{
			echo "<br>Normaal";
		}
		elseif ($resultaat > 30 || $resultaat < 30 )
		{
			echo "<br>Overgewicht";
		}
		else {
			echo "onbekent";
		}
	}
		echo bmi_range();
}
?>
