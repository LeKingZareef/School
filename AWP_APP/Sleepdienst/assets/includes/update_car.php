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
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">

    <script src="../assets/js/sweetalert2.min.js"></script>
    <!-- <link rel="stylesheet" href="../sweetalert2.min.css"> -->





    <script src="../js/chart-master/Chart.js"></script>
    
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
            <a href="../../index.html" class="logo"><b>Sleepdienst</b></a>
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
              
                  <p class="centered"><a href="profile.html"><img src="../img/apw.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Marcel Newman</h5>
                    
                  <li class="mt">
                      <a  href="../../index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="../../nieuw_auto.php" >
                          <i class="fa fa-desktop"></i>
                          <span>Nieuwe voertuig</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="../../voertuig_ophalen.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Voertuig ophalen</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
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

             
               <div class="form-group">
              <form class="form-horizontal style-form" role="form" method="POST">
                         
                          <?php include '../../fact_toevoegen.php';?>
                        <h2  class="text-center"> Voeg alle gegevens: </h2>
                        <br>
                      </div>

                      
                    </form>
                  
                  <!-- <div class="form-panel"> -->

                    
                    <?php
include 'config.php';

 


if (isset($_POST["update_dienst"])) {
  
    if(isset($_POST["sleep_id"]) && !empty($_POST["sleep_id"])){
            
            $sleep_id=$_POST["sleep_id"];
           
           $sql = "SELECT * FROM sleepdienst WHERE sleep_id='$sleep_id'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
             $sleep_id = $row['sleep_id'];
             $kenteken_nr = $row['kenteken_nr'];
             $auto = $row['auto'];
             $klant = $row['klant'];
             $category = $row['category'];
             $kosten = $row['kosten'];
             $sleepplaats = $row['sleepplaats'];
             $opslagplaats = $row['opslagplaats'];
             $status = $row['Status'];

             echo "

             <form class='form-horizontal style-form' action='car_update.php' role='form' method='POST'>
                        <div class='form-group'>
                           <label class='col-sm-2 col-sm-2 control-label'> <i class='fa fa-phone-square '> </i>  Kenteken_nr </label>
                              <div class='col-sm-10'>
                                  <input type='text' value='$kenteken_nr' class='form-control' name='kenteken_nr'>
                              </div>
                          </div>
                          <div class='form-group'>
                           <label class='col-sm-2 col-sm-2 control-label'> <i class='fa fa-phone-square '> </i>  Klant </label>
                              <div class='col-sm-10'>
                                  <input type='text' value='$klant' class='form-control' name='klant'>
                              </div>
                          </div>
                           <div class='form-group'>
                           <label class='col-sm-2 col-sm-2 control-label'> <i class='fa fa-phone-square '> </i>  Auto </label>
                              <div class='col-sm-10'>
                                  <input type='text' value='$auto'class='form-control' name='auto'>
                              </div>
                          </div>
                            <div class='form-group'>
                           <label class='col-sm-2 col-sm-2 control-label'> <i class='fa fa-user'> </i> Category</label>
                              <div class='col-sm-10'>
                                  <input type='text' value='$category' class='form-control' name='category' >
                              </div>
                          </div>
                          <div class='form-group'>
                           <label class='col-sm-2 col-sm-2 control-label'> <i class='fa fa-user'> </i> Kosten</label>
                              <div class='col-sm-10'>
                                  <input type='text' value='$kosten' class='form-control' name='kosten' >
                              </div>
                          </div>
                          <div class='form-group'>
                           <label class='col-sm-2 col-sm-2 control-label'> <i class='fa fa-clock-o'> </i> Sleepplaats</label>
                              <div class='col-sm-10'>
                                  <input type='text' value='$sleepplaats' class='form-control' name='sleepdienst'>
                              </div>
                          </div>
                        <div class='form-group'>
                           <label class='col-sm-2 col-sm-2 control-label'> <i class='fa fa-text-width'> </i> Opslagplaats</label>
                              <div class='col-sm-10'>
                                  <input type='text' value='$opslagplaats' class='form-control' name='opslagplaats'> </input> 
                              </div>
                          </div> 
                          <div class='form-group'>
                           <label class='col-sm-2 col-sm-2 control-label'> <i class='fa fa-text-width'> </i> Status</label>
                              <div class='col-sm-10'>
                                  <input type='text' value='$status' class='form-control' name='status'> </input> 
                              </div>
                          </div> 
                        
                          </div> 
                         <div class='form-group'>  
                    <input type='submit' value='Opslaan' name='update_car' class='btn btn-theme text-center pull-right' style='margin-right: 14px;'>
                 </div>
                      </form>
                  </div>
              </div>
              


                      
                  ";
        }
    }

    }
}
?>
                  <!-- </div> -->
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
              <a href="../index.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    


    <!--common script for all pages-->
    <script src="../js/common-scripts.js"></script>
    
    <script type="text/javascript" src="../js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../js/gritter-conf.js"></script>

    
    

    
    
  

  </body>
</html>
