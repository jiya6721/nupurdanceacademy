<!DOCTYPE html>
<html>
<head>

  <!-- Use base_url() for static assets -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css'); ?>"> 

  <!-- Correct script tags for JS files -->
  <script src="<?= base_url('public/js/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('public/js/bootstrap.min.js'); ?>"></script>


</head>
<body>

<div class="container">
  <h2>Registartion Form</h2>

  <?php echo @$message; ?>



  <form method="post" enctype="multipart/formdata">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name">
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
    <input type="submit" name="register" class="btn btn-success" value="Register" />
  </form>
</div>

</body>
</html>