
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class Registration extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
    $this->load->helper('form');
 ///load model
	}

    public function index()
    {
        $this->load->view('admin_register_view.php');
	}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
</html>