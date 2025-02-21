
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_events extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Event');
    $this->event = $this->Event;
    $this->load->library('session'); // Make sure session is loaded
	}

    public function index()
    {

        $this->load->library('session'); // Make sure session is loaded
        $this->events = new Event;
        $data['events'] = $this->events->get_events();

        $this->load->view('admin_panel/admin_events',$data);
	}

    public function get_events_list()
{
    
}

    public function add(){
            // echo "123";
            // die;
         
        $this->load->library('session'); // Make sure session is loaded
        $this->events = new Event;


        $data['title']=$_POST['title'];
        $data['discription']=$_POST['discription'];
        $data['files']=$_FILES;
            $result = $this->events->insert_entry($data);
                // PRINT_r($result);
                // die;
            if ($result) {
                $this->session->set_flashdata('register_success', 'You have registered successfully!');
                redirect(base_url('admin_events'));
            } else {
                $this->session->set_flashdata('register_fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_events'));
            }

    }

// Function to delete a gallery item
public function delete($id)
{
    $result = $this->Event->delete_entry($id);
    
    if ($result) {
        $this->session->set_flashdata('delete_success', 'Gallery item deleted successfully.');
    } else {
        $this->session->set_flashdata('delete_fail', 'Failed to delete gallery item.');
    }

    redirect(base_url('admin_events'));
}

// Load the edit form
public function edit($id)
{
    // $events = $this->Event->get_events_with_images_id();   
    $data['event'] = $this->Event->get_events_with_images_id($id)[0];
    // print_R($data);
    // die;
    $this->load->view('admin_panel/edit_event_view', $data);

    }

    public function update()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('title');
        $update_data=[];
        $update_data['title'] = $name;
        $update_data['discription'] = $_POST['discription'];


    
        if(isset($_FILES['files'])){
            $update_data['files']=$_FILES['files'];
        }
    
        $upload_result = $this->Event->update_entry($id,$update_data);
        
        if ($upload_result) {
        
            $this->session->set_flashdata('update_success', 'Slider item updated successfully.');
        } else {
            $this->session->set_flashdata('update_fail', 'Failed to update  item.');
        }
        redirect(base_url('admin_events'));
        
        }
    

    }
?>



