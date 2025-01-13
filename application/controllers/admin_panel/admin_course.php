
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_course extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Course');
	}

    public function index()
    {

       $this->load->library('session'); // Make sure session is loaded
       $this->course = new Course;
       $data['course'] = $this->course->get_course();

       $this->load->view('admin_panel/admin_course',$data);
	}
    public function get_course_list()
    {
        
    
    }

    public function add(){

        
        $this->load->library('session'); // Make sure session is loaded
        $this->course = new Course;


        $data['file']=$_FILES['file'];
        $data['name']=$_POST['name'];

            $result = $this->course->insert_entry($data);

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



