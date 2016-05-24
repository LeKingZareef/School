<?php
include 'include/conect.php';


$sql = "SELECT student_id, student_naam, student_achternaam, student_adress, leeftijd FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if ($row["leeftijd"]>=20) {
    		echo "<b>id:</b> " . $row["student_id"]. " <br/><b>Name:</b> " . $row["student_naam"]. "<b> Achternaam:</b> " . $row["student_achternaam"]. " <b>Adress:</b> " .$row["student_adress"]." <b>Leeftijd:</b>".$row["leeftijd"]. "<br>";
    	}
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>