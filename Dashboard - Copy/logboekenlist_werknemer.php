<?php include 'includes/checklogin.php';?>
<!-- <h4>All Users &nbsp; &nbsp;<a href="profile.php" class="btn btn-primary">Back</a></h4> -->
<div id="#div-id" class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Logboeken Overzicht</div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <div class="table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Logboek Van</th>
                          <th>Taak Naam</th>
                          <th>Project Naam</th>
                          <th>Invul Datum</th>
                          <th>Verrichtte Werkzaamheden</th>
                          <th>Aantal Uren</th>
                          <th>Opmerking</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                          $users_name = $users_data['users_name'];
                          $sql = mysql_query("SELECT * FROM logboek WHERE users_name = '$users_name'");

                          while ($row = mysql_fetch_array($sql)) {
                              $logboek_id = $row['logboek_id'];
                              $users_name = $row['users_name'];
                              $taken_naam = $row['taken_naam'];
                              $invul_datum = $row['invul_datum'];
                              $verrichtte_werkzaamheden = $row['verrichtte_werkzaamheden'];
                              $aantal_uren = $row['aantal_uren'];
                              $opmerking = $row['opmerking'];

                              echo "<tr>";
                              echo "<td>$logboek_id</td>";
                              echo "<td>$users_name</td>";
                              ;?>
                              <?php $sql2 = mysql_query("SELECT * FROM projecten_taken_users WHERE users_name = '$users_name' AND taken_naam = '$taken_naam' " );
                                   echo "<td>";
                                   while ($fetch = mysql_fetch_array($sql2)) {
                                    $taken_naam = $fetch['taken_naam'];
                                    $project = $fetch['projecten_naam'];
                                    echo "$taken_naam";
                                  }
                              "</td>";
                              echo "<td>$project</td>";
                              echo "<td>$invul_datum</td>";
                              echo "<td>$verrichtte_werkzaamheden</td>";
                              echo "<td>$aantal_uren</td>";
                              echo "<td>$opmerking</td>";
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