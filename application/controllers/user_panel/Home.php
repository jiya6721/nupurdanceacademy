<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Home extends CI_Controller {  
      
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    // $this->load->helper('form');
 ///load model
	}

    public function index()  
    {  



        $this->load->model('Slider');
        $this->slider = new Slider;
        $data['sliders'] = $this->slider->get_sliders();

        // print_r($data);
        // die;
        $this->load->view('user_panel/home_screen',$data);  
    }  
    
}  
?>  


























