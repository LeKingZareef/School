 <?php include 'assets/includes/config.php';
 include '../core/init.php';
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
            <a href="index.html" class="logo"><b>Keuringsdienst</b></a>
            <!--logo end-->
           
            <div class="top-menu">

              <ul class="nav pull-right top-menu">

                    <li><a class="logout" href="login.html">Logout</a></li>
                   <a href="../index.php"> <img src="assets/ICONS/home.png"  class="pull-left"></img> </a>

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
                  <h5 class="centered"><?php echo $_SESSION['login_username'];?></h5>
                    
                  <li class="mt">
                      <a  href="index.php" class="active">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                 <li class="sub-menu">
                      <a href="overzicht.php"  >
                   <i class="fa fa-bars" aria-hidden="true"></i>
                          <span>Overzicht gekeurde voertuigen</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="verval_keuring.php" >
                     <i class="fa fa-tasks" aria-hidden="true"></i>
                          <span>Binnenkort verlegen</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a href="nieuwe_keuringen.php" >
                          <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
                          <span>Nieuwe keuringen</span>
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
              <div class="col-md-4">  </div>
<div class="col-md-4"> 

           <div class="text-center" style="margin-top:90px; margin-left:-90px;"  > 
              <h1 style="color:#23b8d0; "> <strong>Keuring </strong> </h1>
              </div>
              <div class="col-md-4"> </div>
              <img src="assets/ICONS/keuringdienst.png">
              </div>  

    
              </div><! --/row -->
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
