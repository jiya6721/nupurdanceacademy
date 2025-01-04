
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_register extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
$this->load->model('User');

 ///load model

 
	}

    public function index()
    {
        $this->load->view('admin_panel/admin_register_view');
	}

    public function register(){

        $this->user = new User;

        // $this->load->model('User');
        
        $data = $this->User->insert_entry($_POST);

        print_R($data);
        die;
        // $this->load->view('blog', $data);

        // $this->form_validation->set_rules('title', 'Title', 'required');

        // $this->form_validation->set_rules('description', 'Description', 'required');



        // if ($this->form_validation->run() == FALSE){

        //     $this->session->set_flashdata('errors', validation_errors());

        //     redirect(base_url('itemCRUD/create'));

        // }else{

        //    $this->itemCRUD->insert_item();

        //    redirect(base_url('itemCRUD'));

        // }

    }
}
?>



