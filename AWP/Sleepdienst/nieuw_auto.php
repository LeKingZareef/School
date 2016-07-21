<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sleepdienst | Sleepdienst</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="sleepdienst/assets/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sleepdienst/assets/css/sweetalert2.min.css">





    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Sleepdienst</b></a>
            <!--logo end-->
           
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/apw.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  	
                   <li class="mt">
                      <a  href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="nieuw_auto.php" >
                          <i class="fa fa-desktop"></i>
                          <span>Nieuwe voertuig</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a  href="voertuig_ophalen.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Voertuig ophalen</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                  <a href="Gesleeptevoertuigen.php" />
                    
                          <i class="fa fa-book"></i>
                          <span>Gesleepte voertuigen</span>
                      </a>
                     
                  </li>
                 
                 
               

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      ********************************************************************************************************************************************************** -->
      <!--main content start-->

      <section id="main-content">
          <section class="wrapper">

              
            
              <div class="col-lg-12">

                  <div class="form-panel">
                    <?php include 'assets/includes/fact_toevoegen.php';?>
                      <form class="form-horizontal style-form" role="form" method="POST">
                          <div class="form-group">
                        <h2  class="text-center"> Gesleepte voertuig invoeren: </h2>
                        <br>
                             <!--  <label class="col-sm-2 col-sm-2 control-label"><p class="fa fa-user"></p> KLant</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control " name="klant" readonly>
                              </div> -->
                          </div>
                          <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-phone-square "> </i>  Kenteken_nr </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="kenteken_nr">
                              </div>
                          </div>
                           <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-phone-square "> </i>  Auto </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="auto">
                              </div>
                          </div>
                            <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-user"> </i> Category</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="category" >
                              </div>
                          </div>
                          <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-user"> </i> Kosten</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="kosten" >
                              </div>
                          </div>
                          <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-clock-o"> </i> Sleepplaats</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="sleepdienst">
                              </div>
                          </div>
                        <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-text-width"> </i> Opslagplaats</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="opslagplaats"> </input> 
                              </div>
                          </div> 
                        
                          </div> 
                         <div class="form-group">  
                    <input type="submit" value="Opslaan" name="add" class="btn btn-theme text-center pull-right" style="margin-right: 14px;">
                 </div>
                      </form>
                  </div>
              </div>

    
              <! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="    width: 100%;
    background: #23b8d0;
    color: #fff;
    padding: 10px 0;
    z-index: -1 ;
    bottom: 0 ;
    position: absolute;">
          <div class="text-center">
              2016 - NATIN MBO
              <a href="index.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    
	

	
	
  

  </body>
</html>