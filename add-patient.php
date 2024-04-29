<!DOCTYPE html>
<html lang="en">

<?php include('.\Control\Header.php'); ?>


<body>
    <div class="main-wrapper">
    <?php include('.\Control\SubHeader.php'); ?>
    <?php include('.\Control\Navbar.php'); ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Patient</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient ID <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="1001" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Middle Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                      <div class="form-group">
                                            <label>Gender</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                        </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Contact </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Parent Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Parent Contact </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                      <div class="form-group">
                                            <label>Relationship to Patient</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option value="1">Father</option>
                                                    <option value="2">Mother</option>
                                                    <option value="2">Brother</option>
                                                    <option value="2">Sister</option>
                                                    <option value="2">Aunty</option>
                                                    <option value="2">Uncle</option>
                                                    <option value="2">Grandmom</option>
                                                    <option value="2">Granddad</option>
                                                    <option value="2">Cousin</option>
                                                    <option value="2">Niece</option>
                                                    <option value="2">Nephew</option>
                                                </select>
                                        </div>
                                </div>
                                 <div class="col-sm-6">
                                <div class="form-group">
                                <label>Registration Fee </label>
                                        <div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">$</span>
											</div>
                                            <input type="number" class="form-control">
											<div class="input-group-prepend">
												<span class="input-group-text">0.00</span>
											</div>
                                            
                                        </div>
                                    </div>
                                 </div>
                                <div class="col-sm-6">
									<div class="form-group">
										<label>Avatar</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img alt="" src="assets/img/user.jpg">
											</div>
											<div class="upload-input">
												<input type="file" class="form-control">
											</div>
										</div>
									</div>
                                </div>
                                
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control ">
											</div>
										</div>
									</div>
								</div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Register</button>
                            </div>
                            
                        </form>
                    </div>
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


<!-- add-patient24:07-->
</html>
