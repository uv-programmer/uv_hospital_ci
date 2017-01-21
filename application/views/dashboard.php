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
		<nav class="navbar navbar-default rs-navbar navbar-static-top">
			<div class="container-fluid">

				<!-- 
				Begin navbar header
				Brand and toggle get grouped for better mobile display 
				-->
				<div class="navbar-header has-right-divider">

					<!-- Begin Logo Brand 
					Available class : .fixed-width
					-->
					<div class="rs-logo">
						<!-- Main Image logo -->
						<a class="navbar-brand" href="index.html">
						<img alt="Hospital" src="../dist/img/logo.png">
						</a>
						<!-- Main small logo -->
						<!-- <a class="navbar-brand" href="index.html">
						<img alt="Brand" src="../dist/img/logo-small.png">
						</a> -->
						<!-- Text logo -->
						<!-- <a class="navbar-brand text-uppercase rs-brand-text" href="index.html">
						Roosa
						</a> -->
						<!-- Initial text / icon logo -->
						<!-- <a class="navbar-brand rs-brand-text brand-initial" href="index.html">
						<i class="gcon gcon-twitter text-info"></i>
						</a> -->
					</div><!-- /.rs-logo -->
					<!-- End Logo Brand -->

					<!-- Begin button to toggle sidebar -->
					<button type="button" class="navbar-toggle collapsed sidebar-toggle" id="rs-sidebar-toggle-mobile">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- End button to toggle sidebar -->

					<!-- Begin button to toggle navbar element -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#roosa-nav-collapse" aria-expanded="false">
						<span class="gcon gcon-dots-three-vertical f-s-sm"></span>
					</button>
					<!-- End button to toggle navbar element -->

				</div><!-- /.navbar-header -->
				<!-- End Navbar header -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="roosa-nav-collapse">

					<!-- All left content goes here -->
					<div class="navbar-left">

						<!-- Begin nav search form -->
						<form class="navbar-form navbar-left">
							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="Search and hit enter">
								<span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
							</div>
						</form>
						<!-- End nav search form -->

					</div><!-- /.navbar-left -->
					<!-- End navbar left content -->

					<!-- All right content goes here -->
					<div class="navbar-right">

						<ul class="nav navbar-nav">
							<li class="navbar-icon dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="gcon gcon-shopping-bag"></i>
									<span class="visible-xs-inline-block text-menu">Your Cart</span>
								</a>
								<ul class="dropdown-menu xl-dropdown p-b-0 p-t-0">
									<li class="dropdown-header text-uppercase has-divider hidden-xs">
										Your cart
									</li>
									<li class="dropdown-empty-state text-center">
										<span class="empty-icon m-b-md"><img src="../images/icons/basic/store.png" alt="Icon"></span>
										<p>You don't have any product</p>
										<p><a class="btn btn-success">Add some</a></p>
									</li>
								</ul>
							</li>
							<li class="navbar-icon dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="circle-notification bg-danger badge-notification"></span>
									<i class="gcon gcon-bell"></i>
									<span class="visible-xs-inline-block text-menu">Notifications</span>
								</a>
								<ul class="dropdown-menu xl-dropdown p-b-0 p-t-0">
									<li class="dropdown-header text-uppercase has-divider hidden-xs">
										Notifications
										<span class="label label-success m-l">2 new</span>
									</li>
									<li>
										<ul class="rs-inner-dropdown has-divider media-menu scroll-dropdown rs-scroll-custom">
											<li class="new"><a href="javascript:void(0);">
												<span class="media img-circle bg-primary">EJ</span>
												<span class="id">Enjelina Joli</span> Add one of your items as favorite
												<span class="time small">About 30 minutes ago</span>
											</a></li>
											<li class="new"><a href="javascript:void(0);">
												<img src="../images/avatars/04.png" class="media img-circle" alt="Avatar">
												<span class="id">Joker Betmen</span> Follows you
												<span class="time small">About an hour ago</span>
											</a></li>
											<li><a href="javascript:void(0);">
												<img src="../images/avatars/13.png" class="media img-circle" alt="Avatar">
												<span class="id">Selena Gemes</span> Commented on one of your items
												<span class="time small">About 30 minutes ago</span>
											</a></li>
											<li><a href="javascript:void(0);">
												<img src="../images/avatars/07.png" class="media img-circle" alt="Avatar">
												<span class="id">Jono Linon</span> Rated you item
												<span class="time small">About 30 minutes ago</span>
											</a></li>
											<li><a href="javascript:void(0);">
												<span class="media img-circle gcon gcon-shopping-bag bg-primary"></span>
												<span class="id">Enjelina Joli</span> Purchased your item
												<span class="time small">About 30 minutes ago</span>
											</a></li>
										</ul>
									</li>
									<li class="text-center bottom-button"><a href="javascript:void(0);">View all notifications</a></li>
								</ul>
							</li>
							<li class="navbar-icon dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="gcon gcon-globe"></i>
									<span class="visible-xs-inline-block text-menu">Connected Accounts</span>
								</a>
								<ul class="dropdown-menu p-b-0 p-t-0">
									<li class="dropdown-header text-uppercase has-divider hidden-xs">Connected Accounts</li>

									<li>
										<ul class="grid-dropdown scroll-dropdown rs-scroll-custom">
											<li>
												<a href="javascript:void(0);">
													<img src="../images/icons/logotype/google-play.png" class="rs-dropdown-img" alt="Icon">
													Play
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<img src="../images/icons/logotype/dropbox.png" class="rs-dropdown-img" alt="Icon">
													Dropobox
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<img src="../images/icons/logotype/dribbble.png" class="rs-dropdown-img" alt="Icon">
													Dribbble
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<img src="../images/icons/logotype/drive.png" class="rs-dropdown-img" alt="Icon">
													Drive
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<img src="<?php echo base_url('assets/images/icons/logotype/skype.png');?>" class="rs-dropdown-img" alt="Icon">
													Skype
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<img src="<?php echo base_url('assets/images/icons/logotype/github.png');?>" class="rs-dropdown-img" alt="Icon">
													Github
												</a>
											</li>
										</ul>
									</li>

									<li class="text-center bottom-button"><a href="javascript:void(0);">All Accounts</a></li>
								</ul>
							</li>
						</ul>

						<ul class="nav navbar-nav">
							<!-- Begin user menu -->
							<li class="rs-user-nav dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="circle-notification badge-notification bg-success"></span>
									<img src="<?php echo base_url('assets/images/avatars/01.png');?>" class="rs-nav-avatar img-circle" alt="Avatar">
									<span class="visible-xs-inline-block m-l">Welcome, <strong>Mister Bin</strong></span>
								</a>
								<!-- Dropdown -->
								<ul class="dropdown-menu lg-dropdown">
									<li class="inherit-bg">
										<a href="javascript:void(0);">
											<span class="f-s-xs f-w-500">Mister Bin, Jr</span><br />
											<small class="text-muted">Earnings:<strong class="m-l-xs text-success">$25,441.35</strong></small>
										</a>
									</li>
									<li role="separator" class="divider"></li>
									<li class="dropdown-header text-uppercase">Account Settings</li>
									<li class="menu-icon"><a href="javascript:void(0);"><span class="mcon mcon-face rs-dropdown-icon"></span>My Account</a></li>
									<li class="menu-icon"><a href="javascript:void(0);"><span class="gcon gcon-cog rs-dropdown-icon"></span>General Settings</a></li>
									<li class="menu-icon"><a href="javascript:void(0);"><span class="gcon gcon-lock-open rs-dropdown-icon"></span>Change Password</a></li>
									<li class="menu-icon"><a href="javascript:void(0);"><span class="gcon gcon-log-out rs-dropdown-icon"></span>Log Out</a></li>
								</ul>
								<!-- End dropdown -->
							</li>
							<!-- End user menu -->
						</ul>
					</div><!-- /.navbar-right -->
					<!-- End navbar right content -->

				</div><!-- /.collapse navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<!-- END MAIN HEADER NAV -->


		<!-- BEGIN SIDEBAR NAV -->
		<aside class="rs-sidebar">

			<!-- Sidebar menu -->
			<ul class="rs-sidebar-nav">
				<li class="menu-header">Main menu</li>

				<li class="active selected">
					<a href="index.html">
						<span class="gcon gcon-gauge rs-icon-menu"></span>Dashboard
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="badge badge-danger">6</span>
						<span class="gcon gcon-browser rs-icon-menu"></span>Page Layouts
					</a>
					<ul>
						<li><a href="pl-static.html">Static Layout</a></li>
						<li><a href="pl-fixed-nav.html">Fixed Nav</a></li>
						<li><a href="pl-boxed-static.html">Boxed Static Layout</a></li>
						<li><a href="pl-boxed-fixed-nav.html">Boxed Fixed Nav</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="gcon gcon-colours rs-icon-menu"></span>Color Palette
					</a>
					<ul>
						<li><a href="palette-basic.html">Basic Colors</a></li>
						<li><a href="palette-gradient.html">Gradients</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="gcon gcon-attachment rs-icon-menu"></span>Ready Pages
					</a>
					<ul>
						<li><a href="page-login-01.html">Login Page 01</a></li>
						<li><a href="page-login-02.html">Login Page 02</a></li>
						<li><a href="page-lock-01.html">Lock Screen 01</a></li>
						<li><a href="page-lock-02.html">Lock Screen 02</a></li>
						<li><a href="page-forgot-01.html">Forgot Password 01</a></li>
						<li><a href="page-forgot-02.html">Forgot Password 02</a></li>
						<li><a href="page-reset-01.html">Reset Password 01</a></li>
						<li><a href="page-reset-02.html">Reset Password 02</a></li>
						<li><a href="page-signup-01.html">Sign Up 01</a></li>
						<li><a href="page-signup-02.html">Sign Up 02</a></li>
						<li><a href="page-404.html">404 Not Found</a></li>
						<li><a href="page-empty.html">Empty Page</a></li>
					</ul>
				</li>

				<li class="menu-block-divider"></li>
				<li class="menu-header">Development</li>
				
				<li>
					<a href="javascript:void(0);">
						<span class="gcon gcon-flow-tree rs-icon-menu"></span>Multilevel Menu
					</a>
					<ul>
						<li><a href="javascript:void(0);">Hi, I am First</a></li>
						<li><a href="javascript:void(0);">Pertamax</a>
							<ul>
								<li><a href="javascript:void(0);">Keduax</a></li>
								<li><a href="javascript:void(0);">Do ngopo ki?</a></li>
								<li><a href="javascript:void(0);">I am Newbie</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="gcon gcon-pin rs-icon-menu"></span>Components
					</a>
					<ul>
						<li>
							<a href="javascript:void(0);">Layout Components</a>
							<ul>
								<li><a href="lc-navbar-elements.html">Navbar Elements</a></li>
								<li><a href="lc-dashhead.html">Dashhead</a></li>
								<li><a href="lc-dashhead-elements.html">Dashhead Elements</a></li>
								<li><a href="lc-breadcrumbs.html">Breadcrumbs</a></li>
							</ul>
						</li>
						<li><a href="component-alerts.html">Alerts</a></li>
						<li><a href="component-buttons.html">Buttons</a></li>
						<li><a href="component-dropdowns.html">Dropdowns</a></li>
						<li><a href="component-general.html">General Items</a></li>
						<li><a href="component-helper.html">Helper</a></li>
						<li>
							<a href="javascript:void(0);">
								<span class="label bg-darken text-success">2658</span>Icons
							</a>
							<ul>
								<li><a href="icon-bootstrap.html">Bootstrap Glyphicons</a></li>
								<li><a href="icon-fa.html">Font Awesome</a></li>
								<li><a href="icon-entypo.html">Entypo</a></li>
								<li><a href="icon-weather.html">Weather Icon</a></li>
								<li><a href="icon-material.html">Material Icon</a></li>
								<li><a href="icon-flag.html">Flag Icon</a></li>
							</ul>
						</li>
						<li><a href="component-list-group.html">List Group</a></li>
						<li><a href="component-media-object.html">Media Object</a></li>
						<li><a href="component-modals.html">Modals</a></li>
						<li><a href="component-nav.html">Nav</a></li>
						<li><a href="component-prettify.html">Google Code Prettify</a></li>
						<li>
							<a href="javascript:void(0);">Panels</a>
							<ul>
								<li><a href="panel-variations.html">Panel Variations</a></li>
								<li><a href="panel-elements.html">Panel Elements</a></li>
							</ul>
						</li>
						<li><a href="component-tabs.html">Tabs &amp; Accordions</a></li>
						<li><a href="component-typography.html">Typography</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="gcon gcon-new-message rs-icon-menu"></span>Form Input
					</a>
					<ul>
						<li><a href="form-basic.html">Basic Input</a></li>
						<li><a href="form-custom.html">Custom Input</a></li>
						<li><a href="form-validation.html">Validation</a></li>
						<li><a href="form-wizard.html">Wizard</a></li>
						<li><a href="editor-summernote.html">Summernote</a></li>
						<li><a href="editor-medium.html">Medium Editor</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="gcon gcon-ruler rs-icon-menu"></span>Tables
					</a>
					<ul>
						<li><a href="table-static.html">Static Table</a></li>
						<li><a href="table-datatable.html">Data Table</a></li>
						<li><a href="table-sortable.html">Sortable</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="gcon gcon-line-graph rs-icon-menu"></span>Chart Plugins
					</a>
					<ul class="right-submenus">
						<li><a href="chart-js.html">Chart Js</a></li>
						<li><a href="chart-morris.html">Morris Js</a></li>
						<li><a href="chart-sparklines.html">Sparklines</a></li>
					</ul>
				</li>

				<li class="menu-block-divider"></li>
			</ul>
			<!-- End sidebar menu -->

		</aside><!-- /.rs-sidebar -->
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
		<footer class="rs-footer absolute-footer">
			<span class="text-muted small">&copy; 2017 Hospital Management by <a href="../../../../index.html">Vishnu</a></span>
		</footer>
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