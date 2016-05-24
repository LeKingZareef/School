<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMD - Dashboard</title>
<link href="css/bootstrap.css" rel="stylesheet">
</head>

<form class="form-horizontal" method="post">
  <fieldset>
    <legend>Auto Toevoegen</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Kenteken</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="naam" type="text" name="auto_kenteken">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Model</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="adres" type="text" name="auto_model">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Merk</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="achternaam" type="text" name="auto_merk">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Bouwjaar</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="achternaam" type="text" name="auto_bouwjaar">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Chasisnummer</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="achternaam" type="text" name="auto_chasisnummer">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Deuren</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="achternaam" type="text" name="auto_deurs">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Motor</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="achternaam" type="text" name="auto_motor">
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
      <p> <?php include 'includes/functions/auto.php';?></p>
    </div>
</form>