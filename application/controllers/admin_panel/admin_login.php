<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('url', 'form'));
        $this->load->model('Admin'); // Load model
    }

   // Show login form
   public function login() {
    // If already logged in, redirect to dashboard
    if ($this->session->userdata('admin_id')) {
        redirect('admin_login/dashboard');

    }
    $this->load->view('admin_panel/admin_login_view'); // Load the login view
}

public function login_validation() {
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run()) {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin = $this->Admin->can_login($email, $password);

        if ($admin) {
            $session_data = array(
                'admin_id' => $admin->id,
                'admin_email' => $admin->email
            );
            $this->session->set_userdata($session_data);
            redirect('admin_login/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Invalid Email or Password');
            redirect('admin_login/login');
        }
    } else {
        $this->session->set_flashdata('error', validation_errors());
        redirect('admin_login/login');
    }

}

public function dashboard() {
    if (!$this->session->userdata('admin_id')) {
        redirect('admin_login'); // Redirect if not logged in
    }
    $this->load->view('admin_panel/admin_dashboard'); // Load dashboard view
}

public function logout() {
    $this->session->sess_destroy(); // Destroy session
    redirect('admin_login'); // Redirect to login page
}
}
?>
