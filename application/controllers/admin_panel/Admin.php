<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('admin_id')) {
            redirect('admin_login/login');
        }
        $this->load->model('admin_model');
    }

    public function profile() {
        $data['admin'] = $this->admin_model->get_admin($this->session->userdata('admin_id'));
        $this->load->view('admin/profile', $data);
    }
}
?>
