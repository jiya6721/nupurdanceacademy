
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_register extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Admin');

 ///load model

 
	}

    public function index()
    {
        $this->load->library('session'); // Make sure session is loaded
     
        $this->load->view('admin_panel/admin_register_view');
	}

    // public function register(){

    //     $this->load->library('session'); // Make sure session is loaded
    //     $this->user = new User;
    //     $result = $this->User->insert_user($data);

    //         if ($result) {
    //             $this->session->set_flashdata('register_success', 'You have registered successfully!');
    //             redirect(base_url('admin_dashboard'));
    //         } else {
    //             $this->session->set_flashdata('register_fail', 'Registration failed. Please try again.');
    //             redirect(base_url('admin_dashboard'));
    //         }

    // }
    public function register() {
        $this->load->library('session'); // Load session library if not autoloaded
    
        // Retrieve form data using $this->input->post()
        $data = array(
            'name' => $this->input->post('name'), // Correct the typo if needed
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT), // Encrypt password
        );
    
        if (empty($data['name']) || empty($data['email']) || empty($this->input->post('password'))) {
            $this->session->set_flashdata('register_fail', 'Name is required.');
            redirect(base_url('admin_register'));
            return;
        }

        $this->load->model('admin'); // Load User model
        $result = $this->Admin->insert_user($data); // Call model method
    
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



