
<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class admin_course extends CI_Controller
{
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Course');
    $this->gallary = $this->Course;
    $this->load->library('session'); // Make sure session is loaded
	}

    public function index()
    {

       $this->load->library('session'); // Make sure session is loaded
     $this->course = new Course;
       $data['course'] = $this->course->get_course();

       $this->load->view('admin_panel/admin_course',$data);
	}
    public function get_course_list()
    {
        
    
    }

    public function add(){

        
        $this->load->library('session'); // Make sure session is loaded
        $this->course = new Course;


        $data['file']=$_FILES['file'];
        $data['name']=$_POST['name'];

            $result = $this->course->insert_entry($data);

            if ($result) {
                $this->session->set_flashdata('register_success', 'You have registered successfully!');
                redirect(base_url('admin_course'));
            } else {
                $this->session->set_flashdata('register_fail', 'Registration failed. Please try again.');
                redirect(base_url('admin_course'));
            }

    }

    public function delete($id)
{
    $result = $this->Course->delete_entry($id);
    
    if ($result) {
        $this->session->set_flashdata('delete_success', 'Course item deleted successfully.');
    } else {
        $this->session->set_flashdata('delete_fail', 'Failed to delete course item.');
    }

    redirect(base_url('admin_course'));
}

// Load the edit form
public function edit($id)
{
    $data['course'] = $this->Course->get_course_by_id($id);
    $this->load->view('admin_panel/edit_course_view', $data);
}

// Update course item
public function update()
{
    
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $update_data = ['name' => $name];

    if(isset($_FILES['file'])){
        $update_data['file']=$_FILES['file'];
    }

    $upload_result = $this->Course->update_entry($id,$update_data);
    
    if ($upload_result) {
    
        $this->session->set_flashdata('update_success', 'Slider item updated successfully.');
    } else {
        $this->session->set_flashdata('update_fail', 'Failed to update  item.');
    }
    redirect(base_url('admin_course'));
    
    }


    


    }    

?>



