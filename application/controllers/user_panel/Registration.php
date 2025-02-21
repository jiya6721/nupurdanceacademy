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
        if ($this->input->post('register')) {
            $this->register(); // Call register function if form is submitted
        } else {
            $this->load->view('user_panel/Registration_view');
        }
      }

    private function calculate_age($dob)
    {
        $dob = new DateTime($dob);
        $today = new DateTime('today');
        return $dob->diff($today)->y;
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

        // Validate email uniqueness
        $existing_user = $this->db->get_where('users', ['email' => $email])->row();
        if ($existing_user) {
            $this->session->set_flashdata('error', 'Email already registered.');
            redirect('Registration');
            exit;
        }

        // Validate future DOB
        $dob_date = new DateTime($dob);
        $today = new DateTime('today');

        if ($dob_date > $today) {
            $this->session->set_flashdata('error', 'Date of Birth cannot be in the future.');
            redirect('Registration');
            exit;
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
        if ($this->db->insert('users', $data)) {
            $this->session->set_flashdata('success', 'Registration successful. You can now log in.');
            redirect('Home');
        } else {
            $this->session->set_flashdata('error', 'An error occurred. Please try again.');
            redirect('Registration');
        }
        exit;
    }
}
?>
