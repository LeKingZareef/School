<link rel="stylesheet" href="assets/sweetallert/sweetalert2.min.css">
 <script src="assets/sweetallert/sweetalert2.min.js"></script>
<?php
include 'config.php';

if (isset($_POST["zoek"])) {
  
    if(isset($_POST["kenteken"]) && !empty($_POST["kenteken"]) ){
    $naam_form=$_POST["kenteken"];
        $sql = "SELECT * FROM sleepdienst WHERE kenteken_nr LIKE '%$naam_form%' ";
        $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // $factuur_id = $row['sleep_id'];
                    $klant_naam = $row['kenteken_nr'];
                    $telefoon_nummer = $row['auto'];
                    $werknemer = $row['klant'];
                    $datum = $row['category'];
                    $gew_manuur = $row['kosten'];
                    $uitg_werkz = $row['sleepplaats'];
                    $opslagplaats = $row['opslagplaats'];
                    $status = $row['Status'];

                    echo "
                    <tr>
                        <td>".$klant_naam."</td>
                        <td>".$telefoon_nummer. "</td>
                        <td>".$werknemer."</td>
                        <td>".$datum."</td>
                        <td>".$gew_manuur."</td>
                        <td>".$opslagplaats."</td>
                        <td>".$status."</td>
                    </tr>

                    ";
                }
            }
    }    
}