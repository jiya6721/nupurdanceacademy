<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class course_page extends CI_Controller {  
      
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->model('Course');
    // $this->load->helper('form');
 
	}

            public function validate_access()
        {
            $user_id = $this->input->post('user_id');
            $password = $this->input->post('password');
            $course_id = $this->input->post('course_id');

            $this->load->model('Subscriber');
            $user = $this->Subscriber->validate_user($user_id, $password, $course_id);

            if ($user) {
                $course = $this->Course->get_course_by_id($course_id);
                $data['file_url'] = base_url('protected_files/' . $course->file);
                $data['course'] = $course;
                $this->load->view('user_panel/course_view', $data);
            } else {
                $data['error'] = "Invalid credentials! Access denied.";
                $data['course'] = $this->Course->get_course_by_id($course_id);
                $this->load->view('user_panel/course_view', $data);
            }
        }

        public function download_protected_file($file_name)
{
    // Check if user is authenticated
    if (!$this->session->userdata('authenticated')) {
        show_error('Unauthorized access!', 403);
    }

    $file_path = FCPATH . 'application/private_files/' . $file_name;

    if (!file_exists($file_path)) {
        show_404();
    }

    $this->load->helper('download');
    force_download($file_path, NULL);
}


    public function index($id)  
    {  

                $course = $this->Course->get_course_by_id($id);
                $data['course'] = $course;
                // $data['file_url'] = base_url('download.php');
        $this->load->view('user_panel/course_view',$data);  
    }  
}
?>  

