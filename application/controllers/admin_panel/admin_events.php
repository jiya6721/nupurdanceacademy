
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_events extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Events');
	}

    public function index()
    {

        $this->load->library('session'); // Make sure session is loaded
        $this->slider = new Events;
        $data['sliders'] = $this->slider->get_events();

        $this->load->view('admin_panel/admin_events',$data);
	}

    public function get_events_list()
{
    

}

    public function add(){

        
        $this->load->library('session'); // Make sure session is loaded
        $this->events = new Events;


        $data['title']=$_FILES['title'];
        $data['discription']=$_POST['discription'];

            $result = $this->events->insert_entry($data);
          
            if ($result) {
                $this->session->set_flashdata('register_success', 'You have registered successfully!');
                redirect(base_url('admin_sliders'));
            } else {
                $this->session->set_flashdata('register_fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_sliders'));
            }

    }
    }
   

    

?>



