
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_sliders extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Slider');
	}

    public function index()
    {

        $this->load->library('session'); // Make sure session is loaded
        $this->slider = new Slider;
        $data['sliders'] = $this->slider->get_sliders();

        $this->load->view('admin_panel/admin_sliders',$data);
	}

    public function get_sliders_list()
{
    

}

    public function add(){

        
        $this->load->library('session'); // Make sure session is loaded
        $this->slider = new Slider;


        $data['file']=$_FILES['file'];
        $data['name']=$_POST['name'];

            $result = $this->slider->insert_entry($data);
      
            if ($result) {
                $this->session->set_flashdata('register_success', 'You have registered successfully!');
                redirect(base_url('admin_dashboard'));
            } else {
                $this->session->set_flashdata('register_fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_dashboard'));
            }

    }
    }
   

    

?>



