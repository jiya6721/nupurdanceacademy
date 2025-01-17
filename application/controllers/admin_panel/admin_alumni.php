
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_alumni extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Alumni');
	}

    public function index()
    {

        $this->load->library('session'); // Make sure session is loaded
        $this->alumni = new Alumni;
        $data['alumni'] = $this->alumni->get_alumni();

        $this->load->view('admin_panel/admin_alumni',$data);
	}

    public function get_alumni_list()
{
    

}

    public function add(){

        
        $this->load->library('session'); // Make sure session is loaded
        $this->alumni = new Alumni;


        $data['file']=$_FILES['file'];
        $data['name']=$_POST['name'];
        $data['year']=$_POST['year'];

            $result = $this->alumni->insert_entry($data);
      
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



