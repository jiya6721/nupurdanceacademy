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

    
    // public function view($event_id)  
    // {  
    //     // Fetch event data from the model
    //     $event = $this->Event->get_event_by_id($event_id);
        
    //     if (!$event) {
    //         show_404(); // Show 404 if event is not found
    //     }
    // }  

    public function index()  
    {  
        $this->load->view('user_panel/event_page_view');  
    }  
}
?>  