<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_dashboard extends CI_Controller
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
		
        $this->load->view('admin_panel/admin_dashboard');
	}
    
    
}
?>

