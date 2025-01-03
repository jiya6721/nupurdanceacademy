<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class login extends CI_Controller {  
    
    public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
    $this->load->helper('form');
  
    public function index()
     
    {  
        $this->load->view('login_view');  
    }  
  
    // public function login()  
    // {  
    //     $this->load->view('login_view');  
    // }  
  
    
  
    public function data()  
    {  
        if ($this->session->userdata('currently_logged_in'))   
        {  
            $this->load->view('data');  
        } else {  
            redirect('login/invalid');  
        }  
    }  
  
    public function invalid()  
    {  
        $this->load->view('invalid');  
    }  
  
    public function login_action()  
    {  
        $this->load->helper('security');  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('username', 'Username:', 'required|trim|xss_clean|callback_validation');  
        $this->form_validation->set_rules('password', 'Password:', 'required|trim');  
  
        if ($this->form_validation->run())   
        {  
            $data = array(  
                'username' => $this->input->post('username'),  
                'currently_logged_in' => true  
                );    
                $this->session->set_userdata($data);  
                redirect('login/data');  
        }else {  
            $this->load->view('login_view');  
        }  
    }  
  
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
}
}  
?>


























