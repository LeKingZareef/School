<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Dashboard</title>
<link href="css/bootstrap.css" rel="stylesheet">
</head>

<form class="form-horizontal" method="post">
  <fieldset>
    <legend>Klanten Toevoegen</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Naam</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="naam" type="text" name="klant_naam">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Adress</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="adres" type="text" name="klant_adres">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Achternaam</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="achternaam" type="text" name="klant_achternaam">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Geboortedatum</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="achternaam" type="text" name="klant_gebdatum">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Mobiel</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="achternaam" type="text" name="klant_mobiel">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Bedrijf</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="achternaam" type="text" name="klant_bedrijf">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">BedrijfAdres</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="achternaam" type="text" name="klant_bedrijfadres">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">BedrijfTelefoon</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="achternaam" type="text" name="klant_bedrijftelefoon">
      </div>
    </div>
     <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary" name="insert">Submit</button>
        <a class="btn btn-default" href="index.php">Terug</a>
      </div>
    </div>
    <div class="alert alert-dismissible alert-warning">
      <button type="button" class="close" data-dismiss="alert"></button>
      <p><?php include 'includes/functions/klanten.php'; include 'includes/init.php';?></p>
    </div>
</form>
<h1>Klanten gegevens</h1>

<table class="table">
        <tr>
          <th>ID</th>
          <th>Achternaam</th>
          <th>Voornaam</th>
          <th>Geboorte Datum</th>
          <th>Mobiel</th>
          <th>Bedrijf</th>
          <th>BedrijdAdres</th>
          <th>BedrijfTelefoon</th>
        </tr>
         <?php 
          $sql = mysql_query("SELECT * FROM klant"); 

          while ($row = mysql_fetch_array($sql)) {
            $id = $row['klant_id'];
            $achternaam = $row['klant_achternaam'];
            $voornaam = $row['klant_naam'];
            $gebdatum = $row['klant_gebdatum'];
            $mobiel = $row['klant_mobiel'];
            $bedrijf = $row['klant_bedrijf'];
            $BedrijfAdres = $row['klant_bedrijf'];
            $BedrijfTelefoon = $row['klant_bedrijftelefoon'];
  

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$achternaam</td>";
            echo "<td>$voornaam</td>";
            echo "<td>$gebdatum</td>";
            echo "<td>$mobiel</td>";
            echo "<td>$bedrijf</td>";
            echo "<td>$BedrijfAdres</td>";
            echo "<td>$BedrijfTelefoon</td>";
            echo "<td><form method='post' role='form' action='includes/functions/klantendelete.php'>
                        <div class='form-group'>
                          <input id='' type='text' class='form-control' name='id_to_delete' value='$id'>
                          <input id='' type='submit' class='btn btn-default' name='button_delete' value='delete'>
                        </div>
                        </form>
                        <br><br></td>";
            echo "</tr>";  
          }
        ?>
      </table>