<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(['form_validation', 'session']);
        $this->load->helper(['url', 'form']);
        $this->load->model('User');
    }

    public function index()
    {
       
        $this->load->view('user_panel/Registration_view');
    }

    public function register()
    {
        // Get user inputs
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $address = $this->input->post('address');
        $contact = $this->input->post('contact');
        $dob = $this->input->post('dob');

        // Validate required fields
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required|numeric|min_length[10]');
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Registration');
        }

        // Validate future DOB
        if (strtotime($dob) > time()) {
            $this->session->set_flashdata('error', 'Date of Birth cannot be in the future.');
            redirect('Registration');
        }

        // Prepare data for insertion
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'address' => $address,
            'contact' => $contact,
            'dob' => $dob,
            'age' => $this->calculate_age($dob),
        ];

        // Insert data into the database
        // if ($this->User->insert_user($data)) {
            if ($this->User->insert_user($data)) {

            $this->session->set_flashdata('success', 'Registration successful. You can now log in.');
            redirect('Home'); // Ensure this matches your controller's route
        } else {
            $this->session->set_flashdata('error', 'An error occurred. Please try again.');
            redirect('Registration');
        }
    }

    private function calculate_age($dob)
    {
        $dob = new DateTime($dob);
        $today = new DateTime('today');
        return $dob->diff($today)->y;
    }
}
