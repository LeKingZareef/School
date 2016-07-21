<link rel="stylesheet" href="assets/sweetallert/sweetalert2.min.css">
 <script src="assets/sweetallert/sweetalert2.min.js"></script>
<?php
include 'config.php';

if (isset($_POST["zoek"])) {
	
    if(isset($_POST["bon"]) && !empty($_POST["bon"]) ){
    $naam_form=$_POST["bon"];
    $nama="(+597)";
        $sql = "SELECT * FROM auto_rep WHERE factuur_id LIKE '$naam_form' ";
        $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $factuur_id = $row['factuur_id'];
                    $klant_naam = $row['klant_naam'];
                    $telefoon_nummer = $row['telefoon_nummer'];
                    $werknemer = $row['werknemer'];
                    $datum = $row['datum'];
                    $gew_manuur = $row['gew_manuur'];
                    $uitg_werkz = $row['uitg_werkz'];

                    echo "
                    <tr>
                        <td>".$factuur_id."</td>
                        <td>".$klant_naam."</td>
                        <td>".$telefoon_nummer. "</td>
                        <td>".$werknemer."</td>
                    </tr>

                    ";
                }
            }
    }    
}