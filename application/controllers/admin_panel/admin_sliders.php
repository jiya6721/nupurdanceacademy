
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_sliders extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Slider');
    $this->slider = $this->Slider;
    $this->load->library('session'); // Make sure session is loaded
	}

    public function index()
    {

        $this->load->library('session'); // Make sure session is loaded
        $this->slider = new Slider;
        $data['sliders'] = $this->slider->get_sliders();

        $this->load->view('admin_panel/admin_sliders',$data);
	}

    public function get_sliders_list()
{
    

}
    public function add(){

        $this->slider = new Slider;
        $data['file']=$_FILES['file'];
        $data['name']=$_POST['name'];

            $result = $this->slider->insert_entry($data);
          
            if ($result) {
                $this->session->set_flashdata('register_success', 'You have registered successfully!');
                redirect(base_url('admin_sliders'));
            } else {
                $this->session->set_flashdata('register_fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_sliders'));
            }
    }

// Function to delete a slider item
public function delete($id)
{
    $result = $this->slider->delete_entry($id);
    
    if ($result) {
        $this->session->set_flashdata('delete_success', 'Slider item deleted successfully.');
    } else {
        $this->session->set_flashdata('delete_fail', 'Failed to delete slider item.');
    }

    redirect(base_url('admin_sliders'));
}

// Load the edit form
public function edit($id)
{
    $data['sliders'] = $this->slider->get_slider_by_id($id);
    $this->load->view('admin_panel/edit_slider_view', $data);
}

// Update slider item
public function update()
{
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $update_data = ['name' => $name];

    if(isset($_FILES['file'])){
        $update_data['file']=$_FILES['file'];
    }

    $upload_result = $this->Slider->update_entry($id,$update_data);
    
    if ($upload_result) {
    
        $this->session->set_flashdata('update_success', 'Slider item updated successfully.');
    } else {
        $this->session->set_flashdata('update_fail', 'Failed to update  item.');
    }
    redirect(base_url('admin_sliders'));
    
    }


    }
?>



