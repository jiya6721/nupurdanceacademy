<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class login1 extends CI_Controller {  
    
    public function __construct()
	{
	parent::__construct();
	$this->load->database('User');
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->library(array('form_validation', 'session'));
    }
    public function login(){
     // If already logged in, redirect to dashboard
    if ($this->session->userdata('user_id')) {
        redirect('login1/dashboard');
    }
        $this->load->view('user_panel/login_view');  
    }  
    public function login_validation() {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
    
            $user = $this->User->can_login($email, $password);
    
            if ($user) {
                $session_data = array(
                    'user_id' => $user->id,
                    'user_email' => $user->email
                );
                $this->session->set_userdata($session_data);
                redirect('login1/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid Email or Password');
                redirect('login1/login');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('login1/login');
        }
    
    }
    
    public function dashboard() {
        if (!$this->session->userdata('user_id')) {
            redirect('login1'); // Redirect if not logged in
        }
        $this->load->view('Home'); // Load dashboard view
    }
    
    public function logout() {
        $this->session->sess_destroy(); // Destroy session
        redirect('login1'); // Redirect to login page
    }
    
    // public function data()  
    // {  
    //     if ($this->session->userdata('currently_logged_in'))   
    //     {  
    //         $this->load->view('data');  
    //     } else {  
    //         redirect('login/invalid');  
    //     }  
    // }  
  
    // public function invalid()  
    // {  
    //     $this->load->view('invalid');  
    // }  
  
    // public function login_action()  
    // {  
    //     $this->load->helper('security');  
    //     $this->load->library('form_validation');  
  
    //     $this->form_validation->set_rules('username', 'Username:', 'required|trim|xss_clean|callback_validation');  
    //     $this->form_validation->set_rules('password', 'Password:', 'required|trim');  
  
    //     if ($this->form_validation->run())   
    //     {  
    //         $data = array(  
    //             'username' => $this->input->post('username'),  
    //             'currently_logged_in' => true  
    //             );    
    //             $this->session->set_userdata($data);  
    //             redirect('login/data');  
    //     }else {  
    //         $this->load->view('login_view');  
    //     }  
    // }  
  
    // public function validation()  
    // {  
    //     $this->load->model('login_model');  
  
    //     if ($this->login_model->log_in_correctly())  
    //     {  
    //         return true;  
    //     } else {  
    //         $this->form_validation->set_message('validation', 'Incorrect username/password.');  
    //         return false;  
    //     }  
    // }  
  
    // public function logout()  
    // {  
    //     $this->session->sess_destroy();  
    //     redirect('login/login_model');  
    // }  
// }
}  
?>


























