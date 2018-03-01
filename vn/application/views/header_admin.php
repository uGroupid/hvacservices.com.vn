<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Welcome to online QuatGioCongNghiep.Com.VN</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="../css/style.css" rel="stylesheet" />
	<link href="../css/style_responsive.css" rel="stylesheet" />
	<link href="../css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="../assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="../assets/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
	<link href="../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="../assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body class="fixed-top">
	<!-- BEGIN HEADER -->

	
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" target="_blank" href="<?php echo base_url(); ?>">
				    QuatGioCongNghiep.Com.VN
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
					<ul class="nav top-menu"></ul>
                </div>
                    <!-- END  NOTIFICATION -->
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu" >
                      
                        <!-- END SUPPORT -->
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../img/avatar-mini.png" alt="">
                              
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="sidebar-menu">
				<li class="has-sub ">
					<a href="<?php echo base_url();?>admin/news" class=""><span class="icon-box"> <i class="icon-profile"></i></span>News<span class="arrow"></span></a>
				</li>
				 <li class="has-sub ">
					<a href="<?php echo base_url();?>admin/catelog" class=""><span class="icon-box"> <i class="icon-profile"></i></span>Menu<span class="arrow"></span></a>
				</li>
				<li class="has-sub ">
					<a href="<?php echo base_url();?>admin/manager_slideshow" class=""><span class="icon-box"> <i class="icon-profile"></i></span>Slide Shows<span class="arrow"></span></a>
				</li>
				<li class="has-sub ">
					<a href="<?php echo base_url();?>admin/manager_products" class=""><span class="icon-box"> <i class="icon-profile"></i></span>products<span class="arrow"></span></a>
				</li>
				<li class="has-sub ">
					<a href="<?php echo base_url();?>admin/" class=""><span class="icon-box"> <i class="icon-enter"></i></span>Thoát<span class="arrow"></span></a>
				</li>


			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->