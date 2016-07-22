<!DOCTYPE html>
<html lang="en">
  <head>
 <?php 
      include 'core/init.php';
      //include 'includes/check.php';
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Autowerkplaats | Autowerkplaats</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    

<link rel="stylesheet" href="assets/sweetallert/sweetalert2.min.css">


    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

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
            <a href="index.php" class="logo"><b>Autowerkplaats</b></a>
            <!--logo end-->
           
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
                     <a href="../index.php"> <img src="../ICONS/home.png"  class="pull-left"></img> </a>
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
              	  <h5 class="centered"><?php echo $_SESSION['login_username'];?> </h5>
              	  	
             <li class="mt">
                      <a  href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="nieuw_factuur.php" >
                          <i class="fa fa-desktop"></i>
                          <span>Nieuwe Factuur</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a  href="fact_bew.php" >
                          <i class="fa fa-book"></i>
                          <span>Geschiedenis</span>
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

               <div class="row mt">
            
              <div class="col-lg-12">

                  <div class="form-panel">
                    <?php include 'assets/includes/fact_toevoegen.php';
                         
                        ?>

                      <form class="form-horizontal style-form" role="form" method="POST">
                          <div class="form-group">
                        <h2  class="text-center"> Nieuw Factuur Aanmaken </h2>
                        <br>
                              <label class="col-sm-2 col-sm-2 control-label"><p class="fa fa-user"></p> Klantnaam</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control " name="klantnaam">
                              </div>
                          </div>
                           <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-phone-square "> </i>  Telefoon-nummer </label>
                              <div class="col-sm-10">
                                  <input type="number" class="form-control" name="telefoon">
                              </div>
                          </div>
                            <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-user"> </i> Werknemer</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="werknemer" >
                              </div>
                          </div>
                          <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-calendar"> </i>   Datum</label>
                              <div class="col-sm-10">
                                  <input type="text"  readonly="readonly" class="form-control"   name="datum" value="<?php
                                   echo "" . date("Y/m/d") 
                                   ?>
                                   " >
                              </div>
                          </div>
                          <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-clock-o"> </i> Gewerkte Manuur</label>
                              <div class="col-sm-10">
                                  <input type="number" class="form-control" name="gew_man">
                              </div>
                          </div>
                        <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-text-width"> </i> Uitgevoerde werkzaamheden</label>
                              <div class="col-sm-10">
                                  <textarea type="number" class="form-control" name="uit_werk"> </textarea> 
                              </div>
                          </div> 
                          <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"> <i class="fa fa-text-width"> </i>Onderdeel nummer [Magazijn]</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="product_number"> 
                              </div>
                              <label class="col-sm-1 col-sm-1 control-label"> <i class="fa fa-text-width"> </i> Aantal</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control" name="product_aantal"> 
                              </div>
                          </div> 
                          <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-money"> </i> Prijs</label>
                              <div class="col-sm-5">
                                  <input name="prijs" type="number" class="form-control">
                              </div>
                              <label class="col-sm-1 col-sm-1 control-label"><i class="fa fa-money"> </i> Koers</label>
                              <div class="col-sm-4">
                                  <input name="koers" type="number" class="form-control">
                              </div>
                          </div> 
                         <div class="form-group">  
                    <!-- <input type="submit" value="Uitprinten & Opslaan" name="add" class="btn btn-theme text-center pull-right" style="margin-right: 14px;" onClick="window.print()"> -->
                    <input type="submit" value="Uitprinten & Opslaan" name="add" class="btn btn-theme text-center pull-right" style="margin-right: 14px;"> 
                 </div>
                      </form>
                  </div>
              </div>
<
    
              <! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
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
     <script src="assets/sweetallert/sweetalert2.min.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    
	

	
	
  

  </body>
</html>
