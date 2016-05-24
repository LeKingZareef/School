<?php include 'includes/checklogin.php';?>
<!-- <h4>All Users &nbsp; &nbsp;<a href="profile.php" class="btn btn-primary">Back</a></h4> -->
<div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Gebruikers Overzicht</div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <div class="table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Naam</th>
                          <th>Achternaam</th>
                          <th>Geboorte Datum</th>
                          <th>Type</th>
                          <th>Email</th>
                          <th>Telefoon</th>
                          <th>About</th>
                          <th>Setting</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                          $sql = mysql_query("SELECT * FROM users ORDER BY users_type "); 

                          

                          if (isset($_POST['button_activeren'])) {
                              $id_to_change = $_POST["id_to_change"];
                              $name_to_change = $_POST["name_to_change"];
                              mysql_query("UPDATE users SET `users_activeer` = '1' WHERE `users_id` = " . (int)$id_to_change);
                              echo "Account $name_to_change Geactiveerd";
                          }
                          if (isset($_POST['button_deactiveren'])) {
                              $id_to_change = $_POST["id_to_change"];
                              $name_to_change = $_POST["name_to_change"];
                              mysql_query("UPDATE users SET `users_activeer` = '0' WHERE `users_id` = " . (int)$id_to_change);
                              echo "Account $name_to_change Gedeactiveerd";
                          }

                          while ($row = mysql_fetch_array($sql)) {
                              $users_activeer = $row['users_activeer'];
                              $users_id = $row['users_id'];
                              $users_name = $row['users_name'];
                              $users_achternaam = $row['users_achternaam'];
                              $users_gebdatum = $row['users_gebdatum'];
                              $users_type = $row['users_type'];
                              $users_email = $row['users_email'];
                              $users_telefoon = $row['users_telefoon'];
                              $users_about = $row['users_about'];
                                  
                              echo "<tr>";
                              echo "<td>$users_id</td>";
                              echo "<td>$users_name</td>";
                              echo "<td>$users_achternaam</td>";
                              echo "<td>$users_gebdatum</td>";
                              echo "<td>$users_type</td>";
                              echo "<td>$users_email</td>";
                              echo "<td>$users_telefoon</td>";
                              echo "<td>$users_about</td>";
                              echo "<td>
                                        <form method='post' role='form' action=''>
                                            <input id='' type='text' class='form-control hide' name='id_to_change' value='$users_id'>
                                            <input id='' type='text' class='form-control hide' name='name_to_change' value='$users_name'>
                                    ";
                                if ($users_activeer == '1') {
                                echo "
                                            <input id='' type='submit' class='btn btn-danger' name='button_deactiveren' value='Deactiveren'>
                                    ";
                                }
                                if ($users_activeer == '0' || $users_activeer == '') {
                                echo "
                                            <input id='' type='submit' class='btn btn-success' name='button_activeren' value='Activeren'>
                                    ";
                                }
                                echo "
                                        </form>
                                    </td>";
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








