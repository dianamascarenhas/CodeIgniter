<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html>
<!-- Head -->
<head>
	<title>HouseShare-Manage Expenses</title>
	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->
	<!-- Custom-Theme-Files -->
	<link rel="stylesheet" href="<?php echo base_url()?>application/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url()?>application/css/style.css" type="text/css" media="all">
	<!-- //Custom-Theme-Files -->
	<!-- Web-Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" 	type="text/css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" 				type="text/css">
	<!-- //Web-Fonts -->
	<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="<?php echo base_url()?>application/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>application/js/bootstrap.min.js"></script>

</head>
<!-- //Head -->
<!-- Body -->
<body>
	<!-- Header -->
	<div class="header w3layouts-1">
		<!-- Top-Bar -->

				<div class="top-bar w3-1">
				<div class="container">
					<div class="header-nav w3-agileits-1">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1><a class="navbar-brand" href="userindex.html">HouseShare</a></h1>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav ">
									<li><a   href="<?php echo site_url("home")?>">Home</a></li>
									<li><a  href="<?php echo site_url("reservations")?>">Reservations</a></li>
									<li><a class="active" href="<?php echo site_url("expenses")?>">Expenses</a></li>
									<li><a  href="<?php echo site_url("payments")?>">Payments</a></li>
									<li><a href="<?php echo site_url("userinfo")?>">Account</a></li>
									<li><a href="<?php echo site_url("sitemap")?>">Sitemap</a></li>
									<li><a href="<?php echo site_url("logout")?>">Logout</a></li>
								</ul>

							</div><!-- /navbar-collapse -->

						</nav>
					</div>
				</div>
			</div>
		<!-- //Top-Bar -->
		<div class="banner">
			<div class="bann-info">
			</div>
		</div>
		<!-- //Slider -->
	</div>

	<!-- //Header -->
 <div class="col-md-4 gal-left gal_mar" >
 </div>

 <div class="col-md-3 gal-left gal_mar">
	 <div class="col-md-7">
		 		<h3>Sitemap</h3>
	 </div><br><br><br>
 <ul class="site1">
        <li><a "<?php echo site_url("home")?>">Home-HouseShare</a>
        </li>
        <li><a href="<?php echo site_url("signup")?>">Sign Up</a>
        </li>
				<li><a href="<?php echo site_url("login")?>">Sign In</a>
        </li>
				<ul class="site">
					<li><a href="<?php echo site_url("reservations")?>">Reservations</a>
					</li>
					<ul class="site">
	            <li><a href="<?php echo site_url("reservations/viewReservations")?>">
	            View Reservations</a>
	            </li>

	        </ul>

        <li><a href="<?php echo site_url("expenses")?>">Manage/View Expenses</a>

        </li>
        <ul class="site">
            <li><a href="<?php echo site_url("expenses/createexpense")?>">
            Create Expenses</a>
            </li><a href="">
            <li>Update Expenses</a>
            </li><a href="">
            <li>Delete Expenses</a>
            </li>

        </ul>
        <li><a href="<?php echo site_url("payments")?>">Manage/View Payment</a>
        </li>
        <ul class="site">
            <li><a href="<?php echo site_url("payments/createpayment")?>">Create Payment</a>
            </li>
            <li><a href="">Update Payment</a>
            </li>
            <li><a href="">Delete Payment</a>
            </li>
        </ul>
				<li><a href="adminmanageuser.html">Manage/View Users</a>
        </li>
        <ul class="site">
            <li><a href="">Add User</a>
            </li>
            <li><a href="">Update/Delete User</a>
            </li>
            <li><a href="">Update User</a>
            </li>
        </ul>

        <li><a href="<?php echo site_url("userinfo")?>">User Info</a>
        </li>
    </ul>
		<li><a href="contact.html">Contact Us</a>
		</li>
	</ul>

		<br><br><br>


</div>

	<div class="clearfix"> </div>


	<!-- footer -->
	<div class="footer w3-agile-1">
		<div class="container">

			<ul class="fb_icons2 agile-1">
				<li><a class="fb" href="#"></a></li>
				<li><a class="twit" href="#"></a></li>
				<li><a class="goog" href="#"></a></li>

			</ul>
		</div>
		<p class="copyright">© 2018 HouseShare. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
	</div>
	<!-- footer -->
</body>
<!-- //Body -->
</html>
