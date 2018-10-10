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
	<title>HouseShare</title>
	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords">
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
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script>
	function roleCheck() {
	if (document.getElementById('guest').checked) {
			document.getElementById('ifGuest').style.visibility = 'visible';
	}
	else document.getElementById('ifGuest').style.visibility = 'hidden';
}

	</script>

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
								<h1><a class="navbar-brand" href="index.html">HouseShare</a></h1>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav ">
									<li><a   href="<?php echo site_url("publichome")?>">Home</a></li>
									<li><a   href="<?php echo site_url("publichome")?>">Contact</a></li>
									<li><a href="<?php echo site_url("login")?>">SignIn</a></li>
									<li><a   href="<?php echo site_url("signup")?>">SignUp</a></li>
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
<div class="contact wthree-3">
	<div class="container">
	<h2 class="tittle notCenter" >Register</h2>
	<div class="col-md-6 content-pro-head1 w3agile-6">
		<!-- <h2 class="tittle">Register</h2> -->
		 <?php echo form_open('signup/register'); ?>

			<div class="form-group">
				<?php echo form_label(' User ID :'); ?> <?php echo form_error('username'); ?>
				<?php echo form_input(array('id' => 'username', 'name' => 'username', 'class' => 'form-control' )); ?><br>

			</div>
				 <div  class="form-group">
						<?php echo form_label('First  Name '); ?>  <?php echo form_error('fname'); ?>
						<?php echo form_input(array('id' => 'fname', 'name' => 'fname', 'class' => 'form-control' )); ?><br>
				</div>
				<div  class="form-group">
						<?php echo form_label('Last  Name '); ?>  <?php echo form_error('lname'); ?>
						<?php echo form_input(array('id' => 'lname', 'name' => 'lname', 'class' => 'form-control' )); ?><br>
				</div>

					 <div  class="form-group">
						<?php echo form_label('Contact Number '); ?>  <?php echo form_error('phnbr'); ?>
						<?php echo form_input(array('id' => 'phnbr', 'name' => 'phnbr', 'class' => 'form-control' )); ?><br>
				</div>



			<div class="form-group">
				<?php echo form_label('Email address:'); ?> <?php echo form_error('emailid'); ?>
				<?php echo form_input(array('id' => 'emailid', 'name' => 'emailid', 'class' => 'form-control' )); ?><br>
			</div>

			 <div class="form-group">
                                <label>Password:</label>
                                <input class="form-control" type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Enter Password" /><br>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password:</label>
                                <input class="form-control" type="password" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>" placeholder="Confirm Password" /><br>
                            </div>
                           <div class="form-group">
				<label for="userrole">User Role:</label><br>
						<input type="radio" onclick="javascript:roleCheck();" id="owner"  name="userrole" value="owner">Owner<br>
						<input type="radio" onclick="javascript:roleCheck();" id="guest"  name="userrole" value="guest">Guest
				</div>

				<div id="ifGuest" style="visibility:hidden">
					<div class="form-group">
						<label for="superuser">SuperUserid</label>
						<input type="text" class="form-control" id="superuser" name="guestOf">
						<label for="superuserpass">SuperUserPass</label>
						<input type="text" class="form-control" id="superuserpass">
					</div>
    </div>

			 <div class="form-group">
			 	<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit', 'class'=>'btn btn-primary', 'value'=>'Submit')); ?>

                <a href="<?php echo site_url("publichome")?>" class="btn btn-default" value="cancel" >Cancel</a>
            </div>

		<br/>
		<a href="<?php echo site_url("login")?>" class="pull-right btn btn-block btn-danger" > Already Register ? </a>
		<br/>
		<?php echo form_close(); ?><br>

			</div>

			<div class="col-md-6 content-pro-head content-pro-head3 agile-6">
			<h4>Information</h4>
			<p>Register to access the full-fledged website that allows you to keep track of the happenings inside the house.</p>
		<h4>Address</h4>
		<ul class="contact-list agileits-6">
				<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Engineering Research Building, UTA, Arlinton, TX.</li>
				<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:houseshare@mail.com">wdm@uta.com</a></li>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 2222 222</li>
			</ul>
    </div>

	</div>




	<div class="clearfix"> </div>
	</div>
</div>


<!-- footer -->
<div class="footer w3-agile-1">
	<div class="container">

		<ul class="fb_icons2 agile-1">
			<li><a class="fb" href="#"></a></li>
			<li><a class="twit" href="#"></a></li>
			<li><a class="goog" href="#"></a></li>
			<li><a class="pin" href="#"></a></li>
			<li><a class="drib" href="#"></a></li>
		</ul>
	</div>
	<p class="copyright">© 2017 Premier Realty. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
</div>
<!-- footer -->
</body>
<!-- //Body -->
</html>
