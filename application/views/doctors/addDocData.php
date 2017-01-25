<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Hospital-Add Doctor</title>

	<!-- Site Icons -->
	<link rel="apple-touch-icon" href="../dist/img/apple-touch-icon.png">
	<link rel="icon" href="../dist/img/icon.ico">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Framework -->
	<link rel="stylesheet" href="<?php echo base_url('assets/stylesheets/vendor/bootstrap.min.css');?>">

	<!-- Icon Fonts -->
	<link rel="stylesheet" href="<?php echo base_url('assets/icons/entypo/entypo.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/icons/fa/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/icons/flag-icon/css/flag-icon.min.css');?>">

	<link rel="stylesheet" href="<?php echo base_url('assets/icons/material-icon/material-icon.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/icons/weather-icon/css/weather-icons.min.css');?>">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?php echo base_url('assets/stylesheets/plugins.css');?>">

	<!-- Main Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/stylesheets/bootstrap.custom.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/stylesheets/style.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/stylesheets/horizontal-menu.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/stylesheets/helper.css');?>">
</head>


<body>

	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div id="rs-wrapper" class="rs-horizontal-menu">

		<!-- BEGIN MAIN HEADER NAV -->
		<?php $this->load->view('layout/header');?>
		<!-- END SIDEBAR NAV -->


		<!-- BEGIN MAIN CONTENT -->
		<article class="rs-content-wrapper">
			<div class="rs-content" >
				<div class="rs-inner">
		<div class="rs-dashhead m-b-lg">
						<div class="rs-dashhead-content">
							<div class="rs-dashhead-titles">
								<h6 class="rs-dashhead-subtitle text-uppercase">Doctors</h6>
								<h3 class="rs-dashhead-title m-t">New Entry</h3>
								<!-- End Toolbar toggle button on mobile -->
							</div><!-- /.rs-dashhead-titles -->
						</div>
		<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="javascript:void(0);">Doctors</a></li>
							<li class="active">Add New</li>
						</ol>
						</div>
		<div class="rs-medium-content">
						<div class="container-fluid">

		<div class="panel panel-plain panel-rounded">
							<div class="panel-heading borderless">
								<h3 class="panel-title">Basic Details</h3>
								<p class="subtitle text-uppercase m-t">Personal</p>
								<!-- Begin Panel Toolbar -->
								<div class="panel-toolbar">
									<ul class="list-inline m-a-0">
										<li><i class="rs-collapse-panel icon-toolbar-rotate icon-toolbar gcon gcon-chevron-up"></i></li>
										<li><i class="rs-refresh-panel icon-toolbar gcon gcon-cycle"></i></li>
										<li><i class="rs-close-panel icon-toolbar gcon gcon-cross"></i></li>
									</ul>
								</div><!-- /.panel-toolbar -->
								<!-- End Panel Toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body p-t-xs">

					

								<form>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Doctor's Name</label>
												<input type="text" class="form-control">
											</div>
										</div><!-- /.col-md-6 -->
										<div class="col-md-6">
											<div class="form-group">
												<label>Age</label>
												<input type="text" class="form-control">
											</div>
										</div><!-- /.col-md-6 -->
									</div><!-- /.row -->

									<div class="row">
										<div class="col-md-6">
										<div class="form-group">
											<label>Date Of Birth</label>
											<input type="text" class="form-control rs-datepicker" placeholder="MM/DD/YYYY">
										</div><!-- /.form-group -->
									</div><!-- /.col-md-3 -->
										<div class="col-md-6">
											<div class="form-group">
												<label>Email Address</label>
												<input type="email" class="form-control" placeholder="example@email.com">
											</div>
										</div><!-- /.col-md-6 -->
									</div><!-- /.row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Address</label>
										<textarea class="form-control" placeholder="Textarea" style="height: 100px;"></textarea>
											</div>
										</div><!-- /.col-md-6 -->
										<div class="col-md-6">
											<div class="form-group">
												<label>Input URL</label>
												<input type="url" class="form-control">
											</div>
										</div><!-- /.col-md-6 -->
									</div><!-- /.row -->

									

									


									
									
								
									</div>
								<div align="center"><button type="Submit" class="btn btn-primary  active m-b">Submit</button></div>

								</form>
							</div><!-- .panel-body -->
						</div>
						</div>
						</div>
						</div>
						</div>
						</article>
		<!-- END MAIN CONTENT -->


		<!-- BEGIN FOOTER -->
		<!-- <?php $this->load->view('layout/footer');?> -->
		<!-- END FOOTER -->


	</div><!-- /#rs-wrapper -->

	<!-- Screen overlay is required -->
	<div id="rs-screen-overlay"></div>

	
	<!-- <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js></script>
	<script>
	window.jQuery || document.write('<script src="../dist/js/vendor/jquery.min.js"><\/script>')
	</script> -->
	<script src="<?php echo base_url('assets/javascripts/vendor.js');?>"></script>
	<script src="<?php echo base_url('assets/javascripts/plugins.js');?>"></script>
	

	<!-- Page Plugins -->
	<script src="<?php echo base_url('assets/plugins/datepicker/js/bootstrap-datepicker.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/datepicker/datepicker-example.js');?>"></script><!-- Example -->


	<script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js');?>"></script>

	<!-- Template Js -->
	<script src="<?php echo base_url('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-switch/bootstrap-switch-example.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/cleave/cleave.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/cleave/addons/cleave-phone.au.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/cleave/cleave-example.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/masked-input/jquery.maskedinput.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/masked-input/maskedinput-example.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/maxlength/bootstrap-maxlength.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/maxlength/maxlength-example.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/selectize/js/standalone/selectize.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/selectize/selectize-example.js');?>"></script>


	<script src="<?php echo base_url('assets/javascripts/apps.js');?>"></script>
	<script src="<?php echo base_url('assets/javascripts/dashboard.js');?>"></script>
	<script src="<?php echo base_url('assets/javascripts/layout-horizontal.js');?>"></script>

</body>
</html>