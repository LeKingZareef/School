<html>
  <head>
	   <link rel="stylesheet" type="text/css" href="bootstrap.css">
  </head>
   <body>
   
     <form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="POST" >
     	<div class="form-group">
	      <label for="input_gewicht" class="col-lg-2 control-label">Gewicht</label>
	      	<div class="col-lg-10">
	      		<input type="text" class="form-control" placeholder="Gewicht" name="gewicht">
      		</div>
    	</div>

    	<div class="form-group">
	      <label for="input_lengte" class="col-lg-2 control-label">Lengte</label>
	      	<div class="col-lg-10">
	      		<input type="text" class="form-control" placeholder="Lengte" name= "lengte">
      		</div>
    	</div>

    	<div class="form-group">
	      <label for="input_leeftijd" class="col-lg-2 control-label">Leeftijd</label>
	      	<div class="col-lg-10">
	      		<input type="text" class="form-control" placeholder="Leeftijd" name="leeftijd">
      		</div>
    	</div>

    	 <div class="form-group">
      		<div class="col-lg-10 col-lg-offset-2">
        		<button type="submit" class="btn btn-primary" name="button">Submit</button>
      		</div>
    	</div>
     </form>

    <div class="alert alert-dismissible alert-warning">
      <?php include 'function.php';?>
	  </div>
   </body>
</html>
