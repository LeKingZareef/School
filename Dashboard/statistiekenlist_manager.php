		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Aantal Projecten / Jaar:</h4>
						<?php 
							$aantal_projecten = mysql_result(mysql_query("SELECT count(*) from projecten;"),0);
							$jaar = 365;
							$procent_projecten = ($aantal_projecten / $jaar) * 100;
						?>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo "$procent_projecten"; ?>" ><span class="percent"><?php echo "$aantal_projecten"; ?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Aantal Actieve Projecten:</h4>
						<?php 
							$aantal_active = mysql_result(mysql_query("SELECT count(*) from projecten where projecten_status = 'active';"),0);
							$procent_active = ($aantal_active / $aantal_projecten) * 100;
						?>
						<div class="easypiechart" id="easypiechart-teal" data-percent="<?php echo "$procent_active"; ?>" ><span class="percent"><?php echo "$aantal_active"; ?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Aantal On Hold Projecten</h4>
						<?php 
							$aantal_hold = mysql_result(mysql_query("SELECT count(*) from projecten where projecten_status = 'hold';"),0);
							$procent_hold = ($aantal_hold / $aantal_projecten) * -100;
							// echo "$procent_afgerond";
						?>
						<div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo "$procent_hold"; ?>" ><span class="percent"><?php echo "$aantal_hold"; ?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Aantal Afgeronde Projecten:</h4>
						<?php
							$aantal_afgerond = mysql_result(mysql_query("SELECT count(*) from projecten where projecten_status = 'afgerond';"),0);
							$procent_afgerond = ($aantal_afgerond / $aantal_projecten) * 100;
							// echo "$procent_afgerond";
						?>
						<div class="easypiechart" id="easypiechart-red" data-percent="<?php echo "$procent_afgerond"; ?>" ><span class="percent"><?php echo "$aantal_afgerond"; ?></span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<?php
							$aantal_managers = mysql_result(mysql_query("SELECT count(*) from users where users_type = 'Manager';"),0);
							?>
							<div class="large"><?php echo "$aantal_managers"; ?></div>
							<div class="text-muted">Managers</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<?php
							$aantal_werknemers = mysql_result(mysql_query("SELECT count(*) from users where users_type = 'Werknemer';"),0);
							?>
							<div class="large"><?php echo "$aantal_werknemers"; ?></div>
							<div class="text-muted">Werknemers</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<?php
							$aantal_active_acc = mysql_result(mysql_query("SELECT count(*) from users where users_activeer = '1';"),0);
							?>
							<div class="large"><?php echo "$aantal_active_acc"; ?></div>
							<div class="text-muted">Active Accounts</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<?php
							$aantal_deactive_acc = mysql_result(mysql_query("SELECT count(*) from users where users_activeer = '0';"),0);
							?>
							<div class="large"><?php echo "$aantal_deactive_acc"; ?></div>
							<div class="text-muted">Deactive Accounts</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<div id="#div-id" class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Projecten Statistieken</div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <div class="table-responsive">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>Projecten Naam</th>
                          <!-- <th>Start Datum</th>
                          <th>Eind Datum</th> -->
                          <th>Status</th>
                          <!-- <th>Status</th> -->
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                          $sql = mysql_query("SELECT * FROM projecten");

                          while ($row = mysql_fetch_array($sql)) {
                              $projecten_naam = $row['projecten_naam'];
                              $projecten_start = $row['projecten_start'];
                              $projecten_einde = $row['projecten_einde'];
                              $projecten_status = $row['projecten_status'];

                           	$date1 = date_create("$projecten_start");
							$date2 = date_create("$projecten_einde");
							$diff = date_diff($date1,$date2);
							$duur = $diff->format(" %a ");
	                        $totaal_dagen = $duur;

	                        $data3 = date_create("$projecten_start");
	                        $today = date_create (date("Y/m/d"));
							$diff = date_diff($data3, $today);
							$verschil = $diff->format(" %a");
							$totaal_dagen_gewerkt = $verschil;

							// $procent_status = ($totaal_dagen_gewerkt / $totaal_dagen);
                              
                            echo "<tr>";
                            echo "<td>$projecten_naam</td>";
                            
                            if ($row['projecten_status'] === 'afgerond') {
                              	// echo "<td>100%</td>";
                              	echo '
								    <td>
								    <div class="progress">
									  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
									  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
									    100%
									  </div>
									</div>
									</td>
									';
                            }
                            if($row['projecten_status'] === 'hold'){
                            	// echo "<td>hold</td>";
                            	echo '
								    <td>
								    <div class="progress">
									  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
									  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
									    hold
									  </div>
									</div>
									</td>
									';
                            }
                            if($row['projecten_status'] === 'active'){
                            	$val1 = $totaal_dagen_gewerkt;
								$val2 = $totaal_dagen;
								if($val2 != 0)
								{
								    $res = ( $val1 / $val2) * 100;
								    $res = round($res); // 66.7
								    // echo "<td>".$res. "%</td>";
								    echo '
								    <td>
								    <div class="progress">
									  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
									  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'; echo $res . "%"; echo'">';
									    echo $res . "%";
									  echo '
									  </div>
									</div>
									</td>
									';
								}
								else
								{
								    echo "0";
								}
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