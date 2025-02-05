
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_events extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Event');
	}

    public function index()
    {

        $this->load->library('session'); // Make sure session is loaded
        $this->events = new Event;
        $data['events'] = $this->events->get_events();

        $this->load->view('admin_panel/admin_events',$data);
	}

    public function get_events_list()
{
    

}

    public function add(){
            // echo "123";
            // die;
         
        $this->load->library('session'); // Make sure session is loaded
        $this->events = new Event;


        $data['title']=$_POST['title'];
        $data['discription']=$_POST['discription'];
        $data['files']=$_FILES;
            $result = $this->events->insert_entry($data);
                // PRINT_r($result);
                // die;
            if ($result) {
                $this->session->set_flashdata('register_success', 'You have registered successfully!');
                redirect(base_url('admin_events'));
            } else {
                $this->session->set_flashdata('register_fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_events'));
            }

    }
    }
?>



