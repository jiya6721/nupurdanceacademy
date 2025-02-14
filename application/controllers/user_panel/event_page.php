<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class event_page extends CI_Controller {  
      
    public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
    $this->load->model('Event');
    // $this->load->helper('form');
 
	}

    
    public function index($id)  
    {  

                $event = $this->Event->get_events_with_images_id($id);
                $data['event'] = $event;

        $this->load->view('user_panel/event_page_view',$data);  
    }  
}
?>  