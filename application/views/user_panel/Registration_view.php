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

  
  <body>
<div class="container">
  <h2>Registration Form</h2>

  <?php if ($this->session->flashdata('error')): ?>
      <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
  <?php endif; ?>
  <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
  <?php endif; ?>

  <form method="post" action="<?= site_url('Registration/register'); ?>">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
    </div>

    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Email ID" required>
    </div>

    <div class="form-group">
      <label>Phone Number:</label>
      <input type="text" class="form-control" name="contact" placeholder="Enter Phone Number" required>
    </div>

    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
    </div>

    <div class="form-group">
      <label>Date of Birth:</label>
      <input type="date" class="form-control" name="dob" required>
    </div>

    <div class="form-group">
      <label>Address:</label>
      <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
    </div>

    <input type="submit" name="register" class="btn btn-success" value="Register">
  </form>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        let dobInput = document.querySelector('input[name="dob"]');
        let dob = new Date(dobInput.value);
        let today = new Date();

        if (dob > today) {
            alert("Birth date cannot be in the future.");
            dobInput.value = ""; // Clear the input field
            event.preventDefault(); // Stop form submission
        }
    });
});
</script>
</body>
</html>
