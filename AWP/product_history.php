<?php include 'core/init.php';?>
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

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Product Wijzigen</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a class="active"  href="javascript:;" >
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
            <h3> Alle producten</h3>
        <div class="row">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Show</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Product naam</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Product nummer</th>
                                  <th><i class="fa fa-bookmark"></i> Product merk</th>
                                  <th><i class=" fa fa-edit"></i> Product totaal</th>
                                  <th><i class=" fa fa-edit"></i> Product omschrijving</th>
                                  <th><i class=" fa fa-edit"></i> Prijs per product</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                $sql = 'SELECT * FROM product';
                                
                                foreach ($conn->query($sql) as $row) {
                                    $product_name = $row['product_name'];
                                    $product_number = $row['product_number'];
                                    $product_merk = $row['product_merk'];
                                    $product_aantal = $row['product_aantal'];
                                    $product_omschrijving = $row['product_omschrijving'];
                                    $product_price = $row['product_price'];

                                    echo "<tr>";
                                    echo "<td>$product_name</td>";
                                    echo "<td>$product_number</td>";
                                    echo "<td>$product_merk</td>";
                                    echo "<td>$product_aantal</td>";
                                    echo "<td>$product_omschrijving</td>";
                                    echo "<td>SRD $product_price</td>";
                                    echo "</tr>";
                                }

                              ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel
                  </div><!-- /col-md-12 -->
              </div><!-- /row --> -->

    </section><! --/wrapper -->

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
    


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    
	

	
	
  

  </body>
</html>
