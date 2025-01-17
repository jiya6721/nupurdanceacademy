<!DOCTYPE html>
<html>
<head>

  <!-- Use base_url() for static assets -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css'); ?>"> 

  <!-- Correct script tags for JS files -->
  <script src="<?= base_url('public/js/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('public/js/bootstrap.min.js'); ?>"></script>

  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="public/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="public/modules/jquery-selectric/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/components.css">
  <script src="public/modules/jquery.min.js"></script>
  <script src="public/modules/popper.js"></script>
  <script src="public/modules/tooltip.js"></script>
  <script src="public/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="public/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="public/modules/moment.min.js"></script>
  <script src="public/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <!-- <script src="public/modules/jquery.pwstrength.min.js"></script> -->
  <!-- <script src="public/modules/jquery.selectric.min.js"></script> -->

  <!-- Page Specific JS File -->
  <script src="public/js/auth-register.js"></script>
  
  <!-- Template JS File -->
  <script src="public/js/scripts.js"></script>
  <script src="public/js/custom.js"></script>
</head>


<div class="container">
  <h2>Registartion Form</h2>

  <?php echo @$message; ?>

  
  <body>

  <form method="post"  enctype="multipart/formdata" action="<?php echo site_url('Registration/register');?>">  
    <fieldset>
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name">
      <div class="error"> <?php echo form_error('name');?></div>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Email ID">
    </div>

	<div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
    </div>

	<div class="form-group">
      <label for="passsword">Password:</label>
      <input type="text" class="form-control" name="password" placeholder="Enter Password">
    </div>

  <div class="form-group">
    <label for="dob">Enter your Date of Birth:</label>
    <input type="date" id="dob" name="dob"  />
  </div>

  <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" name="address" placeholder="Enter address">
    </div>

    <input type="submit" name="register" class="btn btn-success" value="Register" src="home_screen"/>
  </form>
</div>>
</fieldset>
</body>
</html>