
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
  <script src="public/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="public/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="public/js/page/auth-register.js"></script>
  
  <!-- Template JS File -->
  <script src="public/js/scripts.js"></script>
  <script src="public/js/custom.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="public/assets/img/NDALOGO.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>
            
              <?php if($this->session->flashdata('register_success')): ?>
<script>
  Swal.fire({
    title: 'Success!',
    text: '<?= $this->session->flashdata('register_success'); ?>',
    icon: 'success'
  });
</script>
<?php endif; ?>

<?php if($this->session->flashdata('register_fail')): ?>
<script>
  Swal.fire({
    title: 'Error!',
    text: '<?= $this->session->flashdata('register_fail'); ?>',
    icon: 'error'
  });
</script>
<?php endif; ?>

              <div class="card-body">
                <form method="POST" action="<?=base_url('admin_register_add')?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">First Name</label>
                      <input id="name" type="text" class="form-control" name="frist_name" autofocus>
                    </div>
                    <!-- <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div> -->
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>

                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label>City</label>
                      <input type="text" class="form-control">
                    </div>
                    
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                       </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>