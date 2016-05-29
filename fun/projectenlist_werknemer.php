<div id="#div-id" class="row">
<?php 
      echo '
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Projecten
          </div>
          <div class="panel-body">
          <div class="canvas-wrapper">
                  <div class="table-responsive">
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>Projecten Naam</th>
                              <th>Eind Datum</th>
                          </tr>
                      </thead>
                      <tbody>
        ';
              $owner = $users_data['users_name'];
              $sql = mysql_query("SELECT DISTINCT projecten_naam FROM projecten_taken_users WHERE users_name = '$owner'");

                            while ($row = mysql_fetch_array($sql)) {
                                // $taken_naam = $row['taken_naam'];
                                $projecten_naam = $row['projecten_naam'];
                                // $users_name = $row['users_name'];

                                echo "<td>$projecten_naam</td>";
                                echo "<td>"; 
                                  $sql2 = mysql_query("SELECT * FROM projecten WHERE projecten_naam = '$projecten_naam'");
                    while ($row = mysql_fetch_array($sql2)) {
                      $projecten_einde = $row['projecten_einde'];
                        echo "$projecten_einde";
                            };
                          echo "</td>";
                                echo "</tr>";
                              }
      echo "
             </tbody>
                    </table>
                    </div>
                 </div>
          </div>
        </div>
      </div>
      ";

    echo "
      <div class='col-lg-12'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            Taken
          </div>
          <div class='panel-body'>
             <table class='table table-striped'>
                      <thead>
                          <tr>
                              <th>Taak Naam</th>
                              <th>Taak Beschrijving</th>
                              <th>Project</th>
                              <th>Taken Status</th>
                          </tr>
                      </thead>
                      <tbody>
      ";
                            $sql = mysql_query("SELECT * FROM projecten_taken_users");

                            while ($row = mysql_fetch_array($sql)) {
                                $taken_naam = $row['taken_naam'];
                                $projecten_naam = $row['projecten_naam'];
                                $users_name = $row['users_name'];


                                if ($users_name === $users_data['users_name'] ) {
                                  echo "<tr>";
                                echo "<td>$taken_naam</td>";
                                echo "<td>"; 
                                  $sql2 = mysql_query("SELECT * FROM taken");
                    // $row = mysql_fetch_array($sql);
                    while ($row = mysql_fetch_array($sql2)) {
                      $taken_beschrijving = $row['taken_beschrijving'];
                      if ($taken_naam == $row['taken_naam']) {
                        echo "$taken_beschrijving";
                              }
                            };
                          echo "</td>";
                                echo "<td>$projecten_naam</td>";
                                echo "<td>?</td>";
                                echo "</tr>";
                                }
                              }
          echo "
                          </tbody>
                    </table>
          </div>
        </div>
      </div>
      ";

?>
</div><!--/.row-->