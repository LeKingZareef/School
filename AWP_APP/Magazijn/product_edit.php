<?php 
  include 'core/init.php';
  include 'includes/check.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <link rel="stylesheet" href="assets/css/material.min.css">
    <script src="assets/js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
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
            <a href="index.html" class="logo"><b>Autowerkplaats</b></a>
            <!--logo end-->
           
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
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
              
              	   <p class="centered"><a href="profile.html"><img src="assets/img/magazijn.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $_SESSION['login_username'];?></h5>
                    
                  <li class="mt">
                      <a  href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                          <!-- Accent-colored raised button with ripple -->
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="product_toevoegen.php" >
                          <i class="fa fa-desktop"></i>
                          <span>Nieuwe product</span>
                      </a>
                  </li>

                  <li  class="sub-menu">
                      <a href="product_edit.php" class="active">
                          <i class="fa fa-cogs"></i>
                          <span>Product Wijzigen</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a   href="product_history.php" >
                          <i class="fa fa-book"></i>
                          <span>Alle Producten</span>
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
        <div class="row">
          <div class="col-lg-9 main-chart">
            <div class="row mtbox">
              <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                <div class="box1">
                  <span class="fa fa-th-list"></span>
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                      Aantal
                    </button>
                </div>
                  <p>Aantal Wijzigen</p>
              </div>
                  <div class="col-md-2 col-sm-2 box0">
                    <div class="box1">
                      <span class="fa fa-times"></span>
                      <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal1">
                      Delete
                    </button>
                    </div>
                      <p>Product Verwijderen</p>
                  </div>
            </div>
        </div><!-- /row mt -->  
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Aantal toevoegen</h4>
                  </div>
                  <div class="modal-body">
                     <form class="form-horizontal style-form" action="includes/aantal_toevoegen.php" method="post" name="aantal_toevoegen">
                          <div class="form-group">
                        <br>
                              <label class="col-sm-2 col-sm-2 control-label">Product-Nummer</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control " name="product_number">
                              </div>
                          </div>
                           <div class="form-group">
                           <label class="col-sm-2 col-sm-2 control-label">Aantal Toevoegen </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="product_aantal">
                              </div>
                    <!-- Accent-colored raised button with ripple -->
                 </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>              

            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                  </div>
                  <div class="modal-body">
                     <form class="form-horizontal style-form" action="includes/product_delete.php" method="post" name="aantal_toevoegen">
                          <div class="form-group">
                        <br>
                              <label class="col-sm-2 col-sm-2 control-label">Product-Nummer</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control " name="product_number">
                              </div>
                          </div>
                           <div class="form-group">
                    <!-- Accent-colored raised button with ripple -->
                 </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>              

            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Aantal toevoegen</h4>
                  </div>
                  <div class="modal-body">
                    Aantal toevoegen
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>              
              </div><!-- /showback -->
    </section><! --/wrapper -->

      <!--main content end-->
      <!--footer start-->
     <footer class="site-footer" style="
      width: 100%;>
      background: #23b8d0;
      color: #fff;
      padding: 10px 0;
      z-index: -1;
      bottom: 0;
      position: absolute;
      ">
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
