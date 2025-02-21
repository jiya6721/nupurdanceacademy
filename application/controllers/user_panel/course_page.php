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

    
    public function index($id)  
    {  

                $course = $this->Course->get_course_by_id($id);
                $data['course'] = $course;

        $this->load->view('user_panel/course_view',$data);  
    }  
}
?>  