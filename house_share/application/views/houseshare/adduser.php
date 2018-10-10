<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- <style type="text/css">

body{
  background-image: url(images/pic3.jpg);
}

</style> -->

</head>
<body>

<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">

<h2 class="text-center text-success">Add User</h2>
<br/>

<div class="col-sm-12">

<br/>
 <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

   <form method="post" action="<?php echo base_url();?>index.php/Adduser/form_validation">

  <div class="form-group">
    <label for="UserID">UserID</label>
    <input type="text"  name="UserID"class="form-control" id="email"><?php echo form_error('UserID');?>
      </div>
     <div  class="form-group">
        <label for="FirstName">FirstName</label>
        <input type="text" name="FirstName" class="form-control" ><?php echo form_error('FirstName');?>
    </div>
    <div  class="form-group">
        <label for="LastName">LastName</label>
        <input type="text" name="LastName" class="form-control" ><?php echo form_error('LastName'); ?>
    </div>


  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" id="email"><?php echo form_error('email'); ?>
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password"  name="pwd" class="form-control" id="pwd"><?php echo form_error('pwd'); ?>
  </div>

  <div class="form-group">
    <label for="passwd">Confirm Password:</label>
    <input type="password" name="cpwd" class="form-control" id="pwd1"><?php echo form_error('cpwd'); ?>
  </div>


    <div class="form-group">
    <label for="User-Role">User Role</label><?php echo form_error('User-Role'); ?><br>
    <input type="radio"  name="User-Role"  value="guest">Guest
          <input type="radio" name="User-Role"  value="owner">Owner
  </div>


    <div class="form-group">
    <label for="PhoneNumber">Phone Number</label><?php echo form_error('PhoneNumber'); ?>
    <input type="text" class="form-control" name="PhoneNumber" id="Phone Number">
  </div>

        <div class="form-group">
    <label for="GuestOF">Guest Of</label>
    <input type="text" class="form-control"  name="Guestof" id="Guest OF"><?php echo form_error('Guestof'); ?>
  </div>





 <button type="submit" class="btn btn-default btn-lg" value="insert">Submit</button>
<a href="<?php echo base_url();?>index.php/admin_c/index"><button type="button" class="btn btn-default btn-lg">Cancel</button></a>

</form>
<br/>




    </div>
 </div>
   </div>
  </div>
</div>
</div>

</body>
</html>
