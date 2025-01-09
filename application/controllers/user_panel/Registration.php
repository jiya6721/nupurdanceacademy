
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class Registration extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
    $this->load->helper('form');
 ///load model
	}
	

	public function index()
	{
		if($this->input->post('register'))
		{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');

		$this->register_model->insert_data($name,$email,$phone,$password);

	}else{
	$this->load->view('registration_view.php');
	}
	}
	public function register()
	{
		redirect('home');
	}
}

        $this->form_validation->set_rules('name', 'name', 'required|max_length[15]');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('confirmPass', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required|valid_date[m/d/Y]|xss_clean');
        $this->form_validation->set_rules('address', 'Address', 'required|min_length[2]|max_length[200]');
        // Run validation
        if ($this->form_validation->run() == FALSE) {

 // Validation failed, print errors
 //echo "Here are the validation errors: ";
    // echo validation_errors();  // This will print all validation error messages

            // Validation failed, reload the form
            $this->load->view('user_panel/Registration_view');
        } else {
         
            // Validation passed, insert data into the database
            $data = array(
                'full_name' => $this->input->post('name'),
                'email'      => $this->input->post('email'),
                'password'   => password_hash($this->input->post('password'), PASSWORD_BCRYPT),  // Hash the password\
                'address'  => $this->input->post('address'),

            );

            // Insert data into the users table
            $this->db->insert('user', $data);
            echo "registered succefully";
            // Redirect to a successs page or login page
            die;
           redirect('login1');
        }

?>
