<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class login extends CI_Controller {  
      
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    // $this->load->helper('form');
 ///load model
	}

    public function index()  
    {  


        $this->load->view('login_view');  
    }  
    
}  
?>  


























