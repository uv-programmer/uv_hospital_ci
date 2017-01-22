<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Hospital Management</title>

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
			<div class="rs-content">
				<div class="rs-inner">

					<!-- Begin Dashhead -->
					<div class="rs-dashhead m-b-lg">
						<div class="rs-dashhead-content">
							<div class="rs-dashhead-titles">
								<h6 class="rs-dashhead-subtitle text-uppercase">Dashboard</h6>
								<h3 class="rs-dashhead-title m-t">Good Day, Mister!</h3>
								<!-- Begin Toolbar toggle button on mobile -->
								<div class="toggle-toolbar-btn">
									<span class="fa fa-sort"></span>
								</div><!-- /.toggle-toolbar-btn -->
								<!-- End Toolbar toggle button on mobile -->
							</div><!-- /.rs-dashhead-titles -->
							<!-- /.rs-dashhead-toolbar -->
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->
						<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="javascript:void(0);">Library</a></li>
							<li class="active">Data</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<!-- Begin medium content width -->
					

				</div><!-- /.rs-inner -->
			</div><!-- /.rs-content -->
		</article><!-- /.rs-content-wrapper -->
		<!-- END MAIN CONTENT -->


		<!-- BEGIN FOOTER -->
		<?php $this->load->view('layout/footer');?>
		<!-- END FOOTER -->


	</div><!-- /#rs-wrapper -->

	<!-- Screen overlay is required -->
	<div id="rs-screen-overlay"></div>

	
	<!-- <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js></script>
	<script>
	window.jQuery || document.write('<script src="../dist/js/vendor/jquery.min.js"><\/script>')
	</script> -->
	<script src="../dist/js/vendor.js"></script>
	<script src="../dist/js/plugins.js"></script>
	

	<!-- Page Plugins -->
	<script src="../dist/plugins/chart-js/Chart.bundle.min.js"></script>
	<script src="../dist/plugins/easypie/jquery.easypiechart.min.js"></script>
	<script src="../dist/plugins/morris/morris.min.js"></script>
	<script src="../dist/plugins/sparkline/jquery.sparkline.min.js"></script>

	<!-- Template Js -->
	<script src="<?php echo base_url('assets/javascripts/apps.js');?>"></script>
	<script src="<?php echo base_url('assets/javascripts/dashboard.js');?>"></script>
	<script src="<?php echo base_url('assets/javascripts/layout-horizontal.js');?>"></script>

</body>
</html>