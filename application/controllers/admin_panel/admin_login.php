<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('url', 'form'));
        $this->load->model('Admin_login'); // Load model
    }

    // Show login form
    public function login() {
        if ($this->session->userdata('admin_id')) {
            redirect('admin_login/dashboard'); // Redirect if already logged in
        }
        $this->load->view('admin_login_view');
    }

    // Validate Login
    public function login_validation() {
        $this->form_validation->set_rules('name', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            $name = $this->input->post('name');
            $password = $this->input->post('password');

            $admin = $this->Admin_login->can_login($name, $password);
            if ($admin) {
                $session_data = array(
                    'admin_id' => $admin->id,
                    'admin_name' => $admin->name
                );
                $this->session->set_userdata($session_data);
                redirect('admin_login/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid Username or Password');
                redirect('admin_login/login');
            }
        } else {
            $this->login(); // Reload login view
        }
    }

    // Dashboard
    public function dashboard() {
        if (!$this->session->userdata('admin_id')) {
            redirect('admin_login/login'); // Redirect to login if not logged in
        }
        echo "Welcome to Admin Dashboard, " . $this->session->userdata('admin_name');
        echo '<br><a href="'.base_url('admin_login/logout').'">Logout</a>';
    }

    // Logout
    public function logout() {
        // $this->session->unset_userdata('id');
        // $this->session->unset_userdata('admin_name');
        $this->session->sess_destroy();
        redirect('admin_login/login');
    }
}
?>
