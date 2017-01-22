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
			<div class="rs-content">
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
								<h3 class="panel-title">Basic Inputs</h3>
								<p class="subtitle text-uppercase m-t">Basic Form Elements</p>
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

								<p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code> and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p><br>

								<form>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Default Text Input</label>
												<input type="text" class="form-control">
											</div>
										</div><!-- /.col-md-6 -->
										<div class="col-md-6">
											<div class="form-group">
												<label>Password</label>
												<input type="password" class="form-control">
											</div>
										</div><!-- /.col-md-6 -->
									</div><!-- /.row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Input with Placeholder</label>
												<input type="text" class="form-control" placeholder="Something here...">
											</div>
										</div><!-- /.col-md-6 -->
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
												<label>Input Number</label>
												<input type="number" class="form-control">
											</div>
										</div><!-- /.col-md-6 -->
										<div class="col-md-6">
											<div class="form-group">
												<label>Input URL</label>
												<input type="url" class="form-control">
											</div>
										</div><!-- /.col-md-6 -->
									</div><!-- /.row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Input Search</label>
												<input type="search" class="form-control">
											</div>
										</div><!-- /.col-md-6 -->
										<div class="col-md-6">
											<div class="form-group">
												<label>Input Tel</label>
												<input type="tel" class="form-control">
											</div>
										</div><!-- /.col-md-6 -->
									</div><!-- /.row -->

									<div class="form-group">
										<label>Input Range</label>
										<input type="range" class="form-control">
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Read only</label>
												<input type="text" class="form-control" placeholder="Read only" readonly>
											</div>
										</div><!-- /.col-md-6 -->
										<div class="col-md-6">
											<div class="form-group">
												<label>Disabled</label>
												<input type="text" class="form-control" placeholder="Disabled" disabled>
											</div>
										</div><!-- /.col-md-6 -->
									</div><!-- /.row -->

									<div class="form-group">
										<label>Textarea</label>
										<textarea class="form-control" placeholder="Textarea" style="height: 100px;"></textarea>
									</div>
									<div class="form-group">
										<label>Select</label>
										<select class="form-control">
											<option selected>Kolojengking</option>
											<option>Tonggeng</option>
											<option>Bekicot</option>
										</select>
									</div>
									<div class="form-group">
										<label>Multiple Select</label>
										<select multiple class="form-control">
											<option selected>Kolojengking</option>
											<option>Tonggeng</option>
											<option>Bekicot</option>
											<option>Walang Sangit</option>
											<option>Undur-undur</option>
										</select>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Default File Input</label>
												<input type="file" class="form-control">
											</div>
										</div><!-- /.col-md-4 -->
										<div class="col-md-4">
											<div class="form-group">
												<label>Custom File Input</label>
												<input type="file" class="filestyle" data-buttonText="Find file">
											</div>
										</div><!-- /.col-md-4 -->
										<div class="col-md-4">
											<div class="form-group">
												<label>Custom File Input Left</label>
												<input type="file" class="filestyle" data-buttonText="Browse"  data-buttonName="btn-success" data-buttonBefore="true" data-placeholder="No file"  data-iconName="glyphicon glyphicon-picture">
											</div>
										</div><!-- /.col-md-4 -->
									</div><!-- /.row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Help Block Left</label>
												<input type="text" class="form-control">
												<p class="help-block">Example block-level help text here.</p>
											</div>
										</div><!-- /.col-md-6 -->
										<div class="col-md-6">
											<div class="form-group">
												<label>Help Block Right</label>
												<input type="text" class="form-control">
												<p class="help-block text-right">Example block-level help text here.</p>
											</div>
										</div><!-- /.col-md-6 -->
										<div class="col-md-3">
											<div class="form-group">
												<label>Help Block Label Left</label>
												<input type="text" class="form-control">
												<p class="help-block"><span class="label label-success">Example block-level help text here.</span></p>
											</div>
										</div><!-- /.col-md-3 -->
										<div class="col-md-3">
											<div class="form-group">
												<label>Help Block Label Right</label>
												<input type="text" class="form-control">
												<p class="help-block text-right"><span class="label label-danger">Example block-level help text here.</span></p>
											</div>
										</div><!-- /.col-md-3 -->
										<div class="col-md-3">
											<div class="form-group">
												<label>Help Block Label Center</label>
												<input type="text" class="form-control">
												<p class="help-block text-center"><span class="label label-info">Example block-level help text here.</span></p>
											</div>
										</div><!-- /.col-md-3 -->
										<div class="col-md-3">
											<div class="form-group">
												<label>Help Block Label Full</label>
												<input type="text" class="form-control">
												<p class="help-block text-center"><span class="label label-warning label-block">Example block-level help text here.</span></p>
											</div>
										</div><!-- /.col-md-3 -->
									</div><!-- /.row -->

									<div class="form-group">
										<label>Input Column Sizing</label>
										<div class="row">
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder=".col-md-3">
											</div>
											<div class="col-md-5">
												<input type="text" class="form-control" placeholder=".col-md-5">
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" placeholder=".col-md-4">
											</div>
										</div><!-- /.row -->
									</div>

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