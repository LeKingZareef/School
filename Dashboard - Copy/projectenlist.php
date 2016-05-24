<?php include 'includes/checklogin.php';?>
<!-- <h4>All Users &nbsp; &nbsp;<a href="profile.php" class="btn btn-primary">Back</a></h4> -->
<div id="#div-id" class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Projecten Overzicht</div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <div class="table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Projecten Naam</th>
                          <th>Projecten Eigenaar</th>
                          <th>Start Datum</th>
                          <th>Eind Datum</th>
                          <th>Status</th>
                          <!-- <th>Project Beschrijving</th> -->
                          <th>Status Veranderen</th>
                          <th>Details</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                          $sql = mysql_query("SELECT * FROM projecten");

                          if (isset($_POST['button_gaande'])) {
                              $id_to_change = $_POST["id_to_change"];
                              $name_to_change = $_POST["name_to_change"];
                              mysql_query("UPDATE projecten SET `projecten_status` = 'active' WHERE `projecten_id` = " . (int)$id_to_change);
                              echo "Project $name_to_change gaande gemaakt!";
                          }
                          if (isset($_POST['button_hold'])) {
                              $id_to_change = $_POST["id_to_change"];
                              $name_to_change = $_POST["name_to_change"];                              
                              mysql_query("UPDATE projecten SET `projecten_status` = 'hold' WHERE `projecten_id` = " . (int)$id_to_change);
                              echo "Project $name_to_change on hold gezet!";
                          }

                          while ($row = mysql_fetch_array($sql)) {
                              $projecten_id = $row['projecten_id'];
                              $projecten_naam = $row['projecten_naam'];
                              $projecten_owner = $row['projecten_owner'];
                              $projecten_start = $row['projecten_start'];
                              $projecten_einde = $row['projecten_einde'];
                              $projecten_beschrijving = $row['projecten_beschrijving'];
                              $projecten_status = $row['projecten_status'];

                              //afgerond auto:
                              $date_current = date("Y/m/d");
                              // echo "$date_current";
                              $date_einde = $projecten_einde;                

                              if(strtotime($date_current) >= strtotime($date_einde))
                              {                             
                              mysql_query("UPDATE projecten SET `projecten_status` = 'afgerond' WHERE `projecten_id` = " . $projecten_id);
                              }
                              //afgerond auto

                              echo "<tr>";
                              echo "<td>$projecten_id</td>";
                              echo "<td>$projecten_naam</td>";
                              echo "<td>$projecten_owner</td>";
                              echo "<td>$projecten_start</td>";
                              echo "<td>$projecten_einde</td>";
                              echo "<td>$projecten_status</td>";
                              //echo "<td>$projecten_beschrijving</td>";
                              if ($projecten_status == 'active' || $projecten_status == 'hold') {
                              echo "<td>";
                              echo "<form method='post' role='form' action=''>";
                                  echo " <input id='' type='text' class='form-control hide' name='id_to_change' value='$projecten_id'>
                                         <input id='' type='text' class='form-control hide' name='name_to_change' value='$projecten_naam'>";
                              if ($projecten_status == 'active') {
                                   echo "<input id='' type='submit' class='btn btn-danger btnhold' name='button_hold' value='Hold'> &nbsp";
                              }
                              if ($projecten_status == 'hold') {
                                   echo "<input id='' type='submit' class='btn btn-success' name='button_gaande' value='Active'> &nbsp";
                              }
                              echo "</form>";
                              echo "</td>";
                              } else {
                              echo "<td>";
                              echo "</td>";
                              }
                              echo "<td>";
                              echo "<form method='post' role='form' action=''>";
                                  echo " <input id='' type='text' class='form-control hide' name='id_to_change' value='$projecten_id'>
                                         <input id='' type='text' class='form-control hide' name='name_to_change' value='$projecten_naam'>";

                                  echo "<input id='' type='submit' class='btn btn-success' name='btnshow' value='Show'>";

                              echo "</form>";
                              echo "</td>";
                              echo "</tr>";
                          }
                      ?>
                  </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div><!--/.row-->

<?php
if (isset($_POST['btnshow'])) {
      $show_data = $_POST['id_to_change'];
      $sql = mysql_query("SELECT * FROM projecten WHERE projecten_id = $show_data");
      $row_show = mysql_fetch_array($sql); 

      $id = $row_show['projecten_id'];
      $naam = $row_show['projecten_naam'];
      $owner = $row_show['projecten_owner'];
      $start = $row_show['projecten_start'];
      $einde = $row_show['projecten_einde'];
      $beschrijving = $row_show['projecten_beschrijving'];
echo "
<div class='row'>
      <div class='col-lg-12'>
        <div class='panel panel-default'>
          <div class='panel-body tabs'>
            <ul class='nav nav-tabs'>
              <li class='active'><a href='#tab6' data-toggle='tab'>Projecten Details</a></li>
              <li><a href='#tab5' data-toggle='tab'>Status Taken</a></li>
            </ul>
    
            <div class='tab-content'>
              <div class='tab-pane fade in active' id='tab6'>
                  <div class='table-responsive'>
                    <table class='table table-striped'>
                        <thead>
                            
                        </thead>
                        <tbody>
                            <p>
                            Project Code: $id<br>
                            Project Naam: $naam<br>
                            Project Beheerder: $owner<br>
                            Project Start op: $start<br>
                            Project Eindigd op: $einde<br>
                            Project Beschrijving:<br> $beschrijving
                            </p>
                            <form method='post' role='form' action='projectenupdate.php'>
                                <input id='' type='text' class='form-control hide' name='id_to_change' value='$id'>
                                <input id='' type='submit' class='btn btn-success' name='button_update' value='Update'>
                            </form>
                        </tbody>
                    </table>
                  </div>
              </div>
              <div class='tab-pane fade' id='tab5'>
                  <div class='table-responsive'>
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <th>Taak Naam</th>
                                <th>Taken Beschrijving</th>
                                <th>Taken Owner</th>
                            </tr>
                          </thead>" 
                            ;?>
                            <?php
                            $sql3 = mysql_query("SELECT *  FROM projecten_taken_users WHERE projecten_naam = '$naam'");
                            while ( $fetch = mysql_fetch_array($sql3)) {
                              $taken_status = $fetch['taken_status'];
                              $taken_naam = $fetch['taken_naam'];
                              $taken_owner = $fetch['users_name'];

                            if ($taken_status == 'active') {
                           
                            echo"
                        <tbody>
                            <td>$taken_naam</td>";?>
                            <?php
                            $sql4 = mysql_query("SELECT taken_beschrijving FROM taken WHERE taken_naam = '$taken_naam'");
                            while ($fetch2 = mysql_fetch_array($sql4)) {
                              $taken_beschrijving = $fetch2['taken_beschrijving'];
                              echo "<td>$taken_beschrijving</td>";
                            }
                            echo "<td>$taken_owner</td>";
} 
}
}
echo "    </tbody>
                    </table>
                  </div>
              </div>
            </div>

          </div>
        </div><!--/.panel-->
      </div>
    </div><!--/.row-->";
?>

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body tabs">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">Projecten Actief</a></li>
              <li><a href="#tab2" data-toggle="tab">Projecten On Hold</a></li>
              <li><a href="#tab3" data-toggle="tab">Projecten Afgerond</a></li>
            </ul>
    
            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab1">
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Projecten Naam</th>
                                <th>Projecten Eigenaar</th>
                                <th>Start Datum</th>
                                <th>Eind Datum</th>
                                <th>Project Beschrijving</th>
                                <!-- <th>Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = mysql_query("SELECT * FROM projecten WHERE `projecten_status` = 'active'");

                                while ($row = mysql_fetch_array($sql)) {
                                    $projecten_id = $row['projecten_id'];
                                    $projecten_naam = $row['projecten_naam'];
                                    $projecten_owner = $row['projecten_owner'];
                                    $projecten_start = $row['projecten_start'];
                                    $projecten_einde = $row['projecten_einde'];
                                    $projecten_beschrijving = $row['projecten_beschrijving'];
                                        
                                    echo "<tr>";
                                    echo "<td>$projecten_id</td>";
                                    echo "<td>$projecten_naam</td>";
                                    echo "<td>$projecten_owner</td>";
                                    echo "<td>$projecten_start</td>";
                                    echo "<td>$projecten_einde</td>";
                                    echo "<td>$projecten_beschrijving</td>";
                                    echo "</tr>";  
                                }
                            ?>
                        </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane fade" id="tab2">
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Projecten Naam</th>
                                <th>Projecten Eigenaar</th>
                                <th>Start Datum</th>
                                <th>Eind Datum</th>
                                <th>Project Beschrijving</th>
                                <!-- <th>Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = mysql_query("SELECT * FROM projecten WHERE `projecten_status` = 'hold'");

                                while ($row = mysql_fetch_array($sql)) {
                                    $projecten_id = $row['projecten_id'];
                                    $projecten_naam = $row['projecten_naam'];
                                    $projecten_owner = $row['projecten_owner'];
                                    $projecten_start = $row['projecten_start'];
                                    $projecten_einde = $row['projecten_einde'];
                                    $projecten_beschrijving = $row['projecten_beschrijving'];
                                        
                                    echo "<tr>";
                                    echo "<td>$projecten_id</td>";
                                    echo "<td>$projecten_naam</td>";
                                    echo "<td>$projecten_owner</td>";
                                    echo "<td>$projecten_start</td>";
                                    echo "<td>$projecten_einde</td>";
                                    echo "<td>$projecten_beschrijving</td>";
                                    echo "</tr>";  
                                }
                            ?>
                        </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane fade" id="tab3">
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Projecten Naam</th>
                                <th>Projecten Eigenaar</th>
                                <th>Start Datum</th>
                                <th>Eind Datum</th>
                                <th>Project Beschrijving</th>
                                <!-- <th>Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = mysql_query("SELECT * FROM projecten WHERE `projecten_status` = 'afgerond'");

                                while ($row = mysql_fetch_array($sql)) {
                                    $projecten_id = $row['projecten_id'];
                                    $projecten_naam = $row['projecten_naam'];
                                    $projecten_owner = $row['projecten_owner'];
                                    $projecten_start = $row['projecten_start'];
                                    $projecten_einde = $row['projecten_einde'];
                                    $projecten_beschrijving = $row['projecten_beschrijving'];
                                        
                                    echo "<tr>";
                                    echo "<td>$projecten_id</td>";
                                    echo "<td>$projecten_naam</td>";
                                    echo "<td>$projecten_owner</td>";
                                    echo "<td>$projecten_start</td>";
                                    echo "<td>$projecten_einde</td>";
                                    echo "<td>$projecten_beschrijving</td>";
                                    echo "</tr>";  
                                }
                            ?>
                        </tbody>
                    </table>
                  </div>
              </div>
            </div>

          </div>
        </div><!--/.panel-->
      </div>
    </div><!--/.row-->










