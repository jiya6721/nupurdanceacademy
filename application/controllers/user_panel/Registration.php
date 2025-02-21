
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class Registration extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
    $this->load->library('form_validation');
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('User');
    $this->load->library('session');
	}
	

	public function index()
	{
		if($this->input->post('register'))
		{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');

		$this->User->insert_data($name,$email,$phone,$password);

	}else{
	$this->load->view('user_panel/Registration_view');
	}
	}
	public function register()
	{

        // $this->form_validation->set_rules('name', 'name', 'required|max_length[15]');
        // $this->form_validation->set_rules('email', 'email', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        // $this->form_validation->set_rules('confirmPass', 'Confirm Password', 'required|matches[password]');
        // $this->form_validation->set_rules('dob', 'Date Of Birth', 'required|valid_date[m/d/Y]|xss_clean');
        // $this->form_validation->set_rules('address', 'Address', 'required|min_length[2]|max_length[200]');
        // // Run validation
        // if ($this->form_validation->run() == FALSE) {

 
        //     $this->load->view('user_panel/Registration_view');
        // } else {


         // Function to calculate age from date of birth
            function calculate_age($dob) 
            {
             $dob = new DateTime($dob);
             $today = new DateTime('today');
             $age = $dob->diff($today)->y;
             return $age;
            }

            $dob = $this->input->post('dob');
            $dob_date = new DateTime($dob);
            $today = new DateTime('today');
    
            // Check if the entered date of birth is in the future
            if ($dob_date > $today) {
                $this->session->set_flashdata('error', 'Date of Birth cannot be in the future.');
                redirect('Registration'); // Redirect back to the registration form
                exit;
            }


            // Validation passed, insert data into the database
            $data = array(
                'name' => $this->input->post('name'),
                'email'      => $this->input->post('email'),
                'password'   => password_hash($this->input->post('password'), PASSWORD_BCRYPT),  // Hash the password\
                'address'  => $this->input->post('address'),
                'contact'   => $this->input->post('contact'), 
                'dob'       => $this->input->post('dob'),
                'age'       => calculate_age($this->input->post('dob')) // Calculate and insert age
            );

            
            // Insert data into the users table
            $this->db->insert('users', $data);
            // echo "registered succefully";
            // Redirect to a successs page or login page
            // die;
            redirect('Home');
            exit;
    }
}
// }
?>
