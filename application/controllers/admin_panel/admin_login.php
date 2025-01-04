<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_login extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
 ///load model
	}

	
        public function index()
	{
		if($this->input->post('admin_panel/admin_login_view'))
		{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		 $this->login_model->insert_data($name,$email,$password);

	}else{
        $this->load->view('admin_panel/admin_login_view');
	}
    }
}
?>



<!-- <html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

   General CSS Files -->
  <!-- <link rel="stylesheet" href="public/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/modules/fontawesome/css/all.min.css"> -->

  <!-- CSS Libraries -->
  <!-- <link rel="stylesheet" href="public/modules/bootstrap-social/bootstrap-social.css"> -->

  <!-- Template CSS -->
  <!-- <link rel="stylesheet" href="public/css/style.css"> -->
  <!-- <link rel="stylesheet" href="public/css/components.css"> -->
<!-- Start GA -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script> -->
<!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script> -->
<!-- /END GA --></head>
</html>