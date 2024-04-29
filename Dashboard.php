<!DOCTYPE html>
<?php include('.\include\Connection.php'); ?>
<?php include('.\Classes\Patients.php');?>
<?php include('.\Classes\Staffs.php');?>
<?php include('.\Classes\Client.php');?>
<?php
$Patients_obj = new Patients();
$Staff_obj = new Staffs();
$Cli = new Client();
?>
<html lang="en">
    <?php include('.\Control\Header.php'); ?>
<body>
    <div class="main-wrapper"> 
    <?php include('.\Control\SubHeader.php'); ?>
    <?php include('.\Control\Navbar.php'); ?>
       
       <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <?php
                  $result = $Staff_obj->GetDocTot();

                  if ($result->num_rows > 0) {
                    while ($optionData = $result->fetch_assoc()) {
                      $TotStaff = $optionData['tot'];
                      
                  ?>
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3><?php echo $TotStaff; ?></h3>
								<span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <?php
                    }
                  }
                  ?>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <?php
                  $result = $Patients_obj->Totpat();

                  if ($result->num_rows > 0) {
                    while ($optionData = $result->fetch_assoc()) {
                      $TotPatient = $optionData['tot'];
                      
                  ?>
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $TotPatient; ?></h3>
                                <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                  }
                  ?>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <?php
                  $result = $Patients_obj->TotApppat();

                  if ($result->num_rows > 0) {
                    while ($optionData = $result->fetch_assoc()) {
                      $TotAppPatient = $optionData['tot'];
                      
                  ?>
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $TotAppPatient; ?></h3>
                                <span class="widget-title3">Appointments <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                  }
                  ?>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>618</h3>
                                <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">New Patients </h4> <a href="patients.php" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-block">
								<div class="table-responsive">
									<table class="table mb-0 new-patient-table">
                                    <thead>
													<tr>
													<th>Name</th>
														<th>Address</th>
														<th>Contact<th>													</tr>
												</thead>
										<tbody>
                                        <?php
                                                $result = $Patients_obj->GetNewPat();
                                                   if($result)
                                                      {
                                                    foreach($result as $row)
                                                         {
                                                       ?>
											<tr>
												<td>
													<img width="28" height="28" class="rounded-circle" src="assets/img/user.jpg" alt=""> 
													<h2><?= $row['name'] ?></strong></h2>
												</td>
												<td><?= $row['Address'] ?></td>
												<td><?= $row['Contact'] ?></td>
												<!-- <td><button class="btn btn-primary btn-primary-one float-right">Fever</button></td> -->
											</tr>
                                            <?php
                                                       }
                                                     }else
                                                       {
                                                      echo "No Record Found";
                                                       }
                                                         ?>
											</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                    <?php
                  $result = $Staff_obj->GetDoc();

                  if ($result->num_rows > 0) {
                    while ($optionData = $result->fetch_assoc()) {
                      $Name = $optionData['Firstname'];
                      $Name2 = $optionData['Middlename'];
                      $Name3 = $optionData['Lastname'];
                      $Field = $optionData['Specialization'];
                      $Qua = $optionData['Qualification'];
                      
                  ?>
                        <div class="card member-panel">
							<div class="card-header bg-white">
								<h4 class="card-title mb-0">Doctors</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="<?php echo $Name2; ?> <?php echo $Name; ?> <?php echo $Name3; ?>"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis"><?php echo $Name2; ?> <?php echo $Name; ?> <?php echo $Name3; ?></span>
                                                <span class="contact-date"><?php echo $Field; ?>, <?php echo $Qua; ?></span>
                                            </div>
                                        </div>
                                    </li>
                                   </ul>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="doctors.php" class="text-muted">View all Doctors</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                  }
                  ?>
				</div>
				<div class="row">
				</div>
            </div>
        </div>
    </div>
    <div class="./sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>


<!-- index22:59-->
</html>