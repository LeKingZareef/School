<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
      include 'core/init.php';
      include 'includes/check.php';
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Autowerkplaats | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/Hover-master/css/hover-min.css" rel="stylesheet">
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
     
      

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
         
              <!-- page start-->
              <div class="tab-pane" id="chartjs">
                  <div class="row mt">
                       <a href="Autowerkplaats/index.php">
                       <div class="col-lg-6 hvr-grow ">
                          <div class="content-panel">
							  <h4 class="text-center" style="font-size: 28px;"><b>AutoWerkplaats</b></h4>

                              <div class="panel-body text-center">
                                  <img src="assets/ICONS/autowerkplaats.png" height="200" width="200"> </img>
                              </div>
                          </div>
                          </a>
                      </div>
					   <a href="Sleepdienst/index.php">
                      <div class="col-lg-6 hvr-grow">
                          <div class="content-panel">
							  <h4 class="text-center" style="font-size: 28px;"><b> Sleepdienst</b></h4>
                              <div class="panel-body text-center">
                               <img src="assets/ICONS/sleepdienst.png" height="200" width="200"> </img>
                              </div>
                          </div>
						  </a>
                      </div>
                  </div>
				  
                  <div class="row mt">
				   <a href="Keuring/index.php">
                      <div class="col-lg-6 hvr-grow">
                          <div class="content-panel">
							  <h4 class="text-center" style="font-size: 28px;"><b></i> Keuring</b></h4>
                              <div class="panel-body text-center">
                              <img src="assets/ICONS/keuringdienst.png" height="200" width="200"> </img>
                              </div>
                          </div>
						  </a>
                      </div>
					   <a href="Magazijn/index.php">
                      <div class="col-lg-6 hvr-grow">
                          <div class="content-panel">
							  <h4 class="text-center" style="font-size: 28px;"><b></i> Magazijn</b></h4>
                              <div class="panel-body text-center">
                              <img src="assets/ICONS/magazijn.png" height="200" width="200"> </img>
                              </div>
                          </div>
						  </a>
                      </div>
                  </div>
                
             
              <!-- page end-->
          </section>          
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
 

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/chart-master/Chart.js"></script>
    <script src="assets/js/chartjs-conf.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
