<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Aantal Projecten</h4>
						<?php 
							$totaal_projecten = mysql_result(mysql_query("SELECT count(*) from projecten;"),0);
							
							$owner = $users_data['users_name'];
							$aantal_projecten = mysql_result(mysql_query("SELECT count(DISTINCT projecten_naam) from projecten_taken_users WHERE users_name = '$owner';"),0);

							$procent_projecten = ($aantal_projecten / $totaal_projecten) * 100;
						?>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo "$procent_projecten"; ?>" ><span class="percent"><?php echo "$aantal_projecten"; ?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Aantal Taken:</h4>
						<?php 
							$totaal_projecten = mysql_result(mysql_query("SELECT count(*) from projecten;"),0);
							
							$owner = $users_data['users_name'];
							$aantal_active = mysql_result(mysql_query("SELECT count(*) from projecten_taken_users WHERE users_name = '$owner';"),0);

							$procent_active = 0;
						?>
						<div class="easypiechart" id="easypiechart-teal" data-percent="<?php echo "$procent_active"; ?>" ><span class="percent"><?php echo "$aantal_active"; ?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Aantal Active Taken:</h4>
						<?php 
							$totaal_projecten = mysql_result(mysql_query("SELECT count(*) from projecten;"),0);
							
							$owner = $users_data['users_name'];
							$aantal_active2 = mysql_result(mysql_query("SELECT count(*) from projecten_taken_users WHERE users_name = '$owner' AND taken_status = 'active';"),0);

							$procent_active2 = 0;
						?>
						<div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo "$procent_active2"; ?>" ><span class="percent"><?php echo "$aantal_active2"; ?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Aantal Afgeronde Taken:</h4>
						<?php
							$totaal_projecten = mysql_result(mysql_query("SELECT count(*) from projecten;"),0);
							
							$owner = $users_data['users_name'];
							$aantal_afgerond = mysql_result(mysql_query("SELECT count(*) from projecten_taken_users WHERE users_name = '$owner' AND taken_status = 'afgerond';"),0);

							$procent_afgerond = 0;
						?>
						<div class="easypiechart" id="easypiechart-red" data-percent="<?php echo "$procent_afgerond"; ?>" ><span class="percent"><?php echo "$aantal_afgerond"; ?></span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div id="#div-id" class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Taken Statistieken</div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <div class="table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>Taak Naam</th>
                          <th>Project Naam</th>
                          <!-- <th>Start Datum</th>
                          <th>Eind Datum</th> -->
                          <th>Status</th>
                          <!-- <th>Status</th> -->
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                      	$owner = $users_data['users_name'];
                          $sql = mysql_query("SELECT * FROM projecten_taken_users WHERE users_name = '$owner'");

                          while ($row = mysql_fetch_array($sql)) {
                              $taken_naam = $row['taken_naam'];
                              $projecten_naam = $row['projecten_naam'];
                              $taken_status = $row['taken_status'];
                              
                            echo "<tr>";
                            echo "<td>$taken_naam</td>";
                            echo "<td>$projecten_naam</td>";
                            
                            if ($row['taken_status'] === 'afgerond') {
                              	// echo "<td>100%</td>";
                              	echo '
								    <td>
								    <div class="progress">
									  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
									  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
									    Afgerond
									  </div>
									</div>
									</td>
									';
                            }
                            if($row['taken_status'] === 'active'){
								    echo '
								    <td>
								    <div class="progress">
									  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
									  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
									    Active
									  </div>
									</div>
									</td>
									';
								}
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