<?php
include 'include/conect.php';


$sql = "SELECT student_id, student_naam, student_achternaam, student_adress, leeftijd FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<b>id:</b> " . $row["student_id"]. " <br/><b>Name:</b> " . $row["student_naam"]. "<b> Achternaam:</b> " . $row["student_achternaam"]. " <b>Adress:</b> " .$row["student_adress"]." <b>Leeftijd:</b>".$row["leeftijd"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<from class="form-horizontal" action="result.php" method="POST">
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
      	<h1>Klik Voor studenten boven de 20 jaar</h1>
        <button type="submit" class="btn btn-primary" value="Post" name="knop" onclick="window.location.href='result.php'">Submit</button>
      </div>
</form>