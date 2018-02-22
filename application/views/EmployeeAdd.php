<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
	<meta charset="UTF-8" />
	<title>BCORE Admin Dashboard Template | Data Tables</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
	<!-- GLOBAL STYLES -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/MoneAdmin.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/Font-Awesome/css/font-awesome.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/form-elements.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

	
	<!--END GLOBAL STYLES -->

	<!-- PAGE LEVEL STYLES -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/validationengine/css/validationEngine.jquery.css')?>" />
	<link href="<?php echo base_url('assets/plugins/dataTables/dataTables.bootstrap.css')?>" rel="stylesheet" />
	<!-- END PAGE LEVEL  STYLES -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body >

	<!-- MAIN WRAPPER -->
	<div id="wrap" >

		<!--PAGE CONTENT -->
		<div>

			<div class="inner">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2> ฟอร์มพนักงาน </h2>
					</div>
				</div>
				<hr />

				<!-- ************************************ เขียนโปรแกรม ************************************ -->
				<div class="row">
					</header>
					<div id="collapseOne" class="accordion-body collapse in body">
						<form action="<?php echo base_url('index.php/EmployeeAdd_controller/getdataemp')?>" class="form-horizontal" id="block-validate"
						method="post">
							<!-- <div class="form-group">
						<label class="control-label col-lg-4">ID :</label>
						<div class="col-lg-5">
							<input type="text" id="IDemp" name="IDemp" class="form-control" maxlength="5" pattern="([0-9]{5})" placeholder="รหัสพนักงาน.." required/>
						</div>
					</div> -->

							<div class="form-group">
								<label class="control-label col-lg-4">ชื่อ :</label>
								<div class="col-lg-5">
									<input type="text" id="Fnameemp" name="Fnameemp" class="form-control" placeholder="นาย/นาง/นางสาว/.." required />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">นามสกุล :</label>
								<div class="col-lg-5">
									<input type="text" id="Lnameemp" name="Lnameemp" class="form-control" placeholder="นามสกุล.." required />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">เบอร์โทร :</label>
								<div class="col-lg-5">
									<input type="text" id="Telemp" name="Telemp" class="form-control" maxlength="10" pattern="([0]{1})([0-9]{9})" placeholder="+66"
									required />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">อีเมล :</label>
								<div class="col-lg-5">
									<input type="email" id="Emailemp" name="Emailemp" class="form-control" placeholder="name@email.com" required />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">วุฒิการศึกษา :</label>
								<div class="col-lg-5">
									<select class="form-control" id="Educationemp" name="Educationemp" required>
										<option value="ระดับปฐมวัย">ระดับปฐมวัย</option>
										<option value="ระดับประถมศึกษา">ระดับประถมศึกษา</option>
										<option value="ระดับมัธยมศึกษา">ระดับมัธยมศึกษา</option>
										<option value="ระดับอาชีวศึกษา">ระดับอาชีวศึกษา</option>
										<option value="ระดับอุดมศึกษา">ระดับอุดมศึกษา</option>
										<option value="อื่นๆ">อื่นๆ</option>
										<option value="ไม่จบการศึกษาใดๆ">ไม่จบการศึกษาใดๆ</option>
									</select>
								</div>
								</label>
							</div>

							<div class="form-group ">
								<label class="control-label col-lg-4">เพศ :</label>
								<label class="radio-inline col-lg-1">
									<input type="radio" name="genderemp" id="genderemp" value="M" checked="checked" required />ชาย
								</label>
								<label class="radio-inline col-lg-1">
									<input type="radio" name="genderemp" id="genderemp" value="F" required />หญิง
								</label>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">เงินเดือน :</label>
								<div class="col-lg-5">
									<select class="form-control" name="salaryemp">
										<option value="6000.00">6000.00 THB</option>
										<option value="8000.00">8000.00 THB</option>
										<option value="10000.00">10000.00 THB</option>
										<option value="15000.00">15000.00 THB</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">วันเกิด :</label>
								<div class="col-lg-5">
									<input type="date" id="birthdayemp" name="birthdayemp" class="form-control" required />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">ตำแหน่ง :</label>
								<div class="col-lg-5">
									<select class="form-control" name="positionemp">
										<?php if($position != null) 
                  				foreach($position as $key => $row) :?>
										<option value="<?php echo $row['POS_ID'] ?>">
											<?php echo $row['POS_NAME'] ?> </option>
										<?php endforeach ?>

									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">วันที่ทำงาน :</label>
								<div class="col-lg-5">
									<input type="date" id="dateemp" name="dateemp" class="form-control" required />
								</div>
							</div>

							<div class="form-group ">
								<label class="control-label col-lg-4">ที่อยู่ :</label>
								<div class="col-lg-5">
									<textarea class="form-control" rows="6" name="addressemp" id="addressemp" required></textarea>
								</div>
							</div>
					</div>

					<div class="form-actions no-margin-bottom" style="text-align:center;">
						<input type="submit" value="ยืนยัน" class="btn btn-primary btn-lg" />
						<a href="<?php echo base_url('index.php/EmployeeList_controller')?>" class="btn btn-danger btn-lg" >ยกเลิก</a>
		

					</div>
					</form>
				</div>
			</div>

			<!-- ************************************ เขียนโปรแกรม ************************************ -->
		</div>
	</div>
	</div>
	<!--END PAGE CONTENT -->

	</div>

	<!--END MAIN WRAPPER -->

	<!-- Modal -->

	<script>
		$('#modal-submit').click(function () {
			$('#block-validate').submit();
		});

		</script>


	<!-- End Modal  -->

	<!-- GLOBAL SCRIPTS -->
	<script src="<?php echo base_url('assets/plugins/jquery-2.0.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
	<!-- END GLOBAL SCRIPTS -->

	<!-- PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url('assets/plugins/validationengine/js/jquery.validationEngine.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/validationInit.js')?>"></script>
	<script>
        $(function () { formValidation(); });
        </script>
	<!-- END PAGE LEVEL SCRIPTS -->

	
</body>
<!-- END BODY -->

</html>