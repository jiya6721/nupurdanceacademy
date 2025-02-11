
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_gallary extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Gallary');
    $this->gallary = $this->Gallary;
    $this->load->library('session'); // Make sure session is loaded
    }

    public function index()
    {

       $this->load->library('session'); // Make sure session is loaded
       $this->gallary = new Gallary;
       $data['gallary'] = $this->gallary->get_gallary();

       $this->load->view('admin_panel/admin_gallary',$data);
	}
    public function get_gallary_list()
    {
        
    
    }

    public function add(){

        $this->gallary = new Gallary;
        $data['file']=$_FILES['file'];
        $data['name']=$_POST['name'];

            $result = $this->gallary->insert_entry($data);

            if ($result) {
                $this->session->set_flashdata('register_success', 'You have registered successfully!');
                redirect(base_url('admin_gallary'));
            } else {
                $this->session->set_flashdata('register_fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_gallary'));
            }
    }

// Function to delete a gallery item
public function delete($id)
{
    $result = $this->Gallary->delete_entry($id);
    
    if ($result) {
        $this->session->set_flashdata('delete_success', 'Gallery item deleted successfully.');
    } else {
        $this->session->set_flashdata('delete_fail', 'Failed to delete gallery item.');
    }

    redirect(base_url('admin_gallary'));
}

// Load the edit form
public function edit($id)
{
    $data['gallary'] = $this->Gallary->get_gallary_by_id($id);
    $this->load->view('admin_panel/edit_gallary_view', $data);
}

// Update gallery item
public function update()
{
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $update_data = ['name' => $name];

    if(isset($_FILES['file'])){
        $update_data['file']=$_FILES['file'];
    }

    $upload_result = $this->Gallary->update_entry($id,$update_data);
    
    if ($upload_result) {
    
        $this->session->set_flashdata('update_success', 'Slider item updated successfully.');
    } else {
        $this->session->set_flashdata('update_fail', 'Failed to update  item.');
    }
    redirect(base_url('admin_gallary'));
    
    }    
}
?>



