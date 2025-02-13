
<?php
class Event extends CI_Model{



    public function get_events(){

        $query = $this->db->get("events");
        return $query->result();

    }
    public function get_event_by_id($id)
    {
        return $this->db->get_where('events', ['id' => $id])->row();
    }

    public function index()
    {
        $this->load->model('Event'); // Load model
        $data['events'] = $this->Event->get_events_with_images();
    
        // Pass the data to a view
        $this->load->view('events_view', $data);
    }
 
    

    public function get_events_with_images_id($id)
    {
        $this->db->select('events.id, events.title, events.discription, events.created_at, GROUP_CONCAT(events_images.image) as images');
        $this->db->from('events')->where('events.id',$id);
        $this->db->join('events_images', 'events.id = events_images.event_id', 'left');
        $this->db->group_by('events.id'); // Group by event ID to prevent duplication
        $query = $this->db->get();
        
        return $query->result(); // Returns an array of objects
    }
    public function get_events_with_images()
{
    $this->db->select('events.id, events.title, events.discription, events.created_at, GROUP_CONCAT(events_images.image) as images');
    $this->db->from('events');
    $this->db->join('events_images', 'events.id = events_images.event_id', 'left');
    $this->db->group_by('events.id'); // Group by event ID to prevent duplication
    $query = $this->db->get();
    
    return $query->result(); // Returns an array of objects
}

public function getEventsWithImages() {
    $this->db->select('e.id, e.title, e.discription, e.created_at, e.update_at, ei.image');
    $this->db->from('events e');
    $this->db->join('events_images ei', 'e.id = ei.event_id', 'left');
    $query = $this->db->get();
    $result = $query->result();

    // Organizing results into a structured array
    $events = [];
    foreach ($result as $row) {
        $eventId = $row->id;

        if (!isset($events[$eventId])) {
            $events[$eventId] = [
                'id' => $row->id,
                'title' => $row->title,
                'discription' => $row->discription,
                'created_at' => $row->created_at,
                'update_at' => $row->update_at,
                'images' => []  // Initialize images array
            ];
        }

        // Add image only if it exists
        if (!empty($row->image)) {
            $events[$eventId]['images'][] = $row->image;
        }
    }

    return array_values($events); // Re-index array for clean output
}
   
    public function insert_entry()
    {
        $config = array(
            'upload_path'   => 'public/uploads/events',
            'allowed_types' => 'jpg|gif|png|jpeg',
            'max_size'      => 2048, // 2MB limit
            'overwrite'     => false,                       
        );
    
        $this->load->library('upload', $config);
        $images = [];
    
        if (!isset($_FILES['file'])) {
            return ['status' => false, 'error' => 'No file uploaded.'];
        }
    
        foreach ($_FILES['file']['name'] as $key => $image_name) {
            $_FILES['image']['name']     = $_FILES['file']['name'][$key];
            $_FILES['image']['type']     = $_FILES['file']['type'][$key];
            $_FILES['image']['tmp_name'] = $_FILES['file']['tmp_name'][$key];
            $_FILES['image']['error']    = $_FILES['file']['error'][$key];
            $_FILES['image']['size']     = $_FILES['file']['size'][$key];
    
            $config['file_name'] = rand() . '-' . $image_name;
            $this->upload->initialize($config);
    
            if ($this->upload->do_upload('image')) {
                $upload_data = $this->upload->data();
                $images[] = $upload_data['file_name']; // Store uploaded file name
            } else {
                return ['status' => false, 'error' => $this->upload->display_errors()];
            }
        }

        
    
        $data = [
            'title'       => $this->input->post('title', true),
            'created_at'  => date('Y-m-d'),
            'discription' => $this->input->post('discription', true),
        ];
    
        $insert_status = $this->db->insert('events', $data);
       

 
        if ($insert_status) {
            $insert_id = $this->db->insert_id(); 

            foreach ($images as $key => $value) {
                
                $data = [
                    'image'       => $value,
                    'event_id'  => $insert_id,
                ];
            
                $insert_status = $this->db->insert('events_images', $data);
                # code...
            }

            return ['status' => true, 'insert_id' => $insert_id];
        } else {
            return ['status' => false, 'error' => 'Failed to insert record.'];
        }


        if ($insert_status) {

            
            return ['status' => true, 'insert_id' => $this->db->insert_id()];
        } else {
            return ['status' => false, 'error' => 'Failed to insert record.'];
        }
    }
    
    public function update_entry($id, $data)
    {
        $this->db->where('id', $id);
        
        $config = array(
            'upload_path'   => 'public/uploads/events',
            'allowed_types' => 'jpg|gif|png|jpeg',
            // 'max_size'      => 2048, // 2MB limit
            'overwrite'     => false,                       
        );
    
        $this->load->library('upload', $config);
        $updateData=[];
        foreach ($_FILES['files']['name'] as $key => $image_name) {
            $_FILES['image']['name']     = $_FILES['files']['name'][$key];
            $_FILES['image']['type']     = $_FILES['files']['type'][$key];
            $_FILES['image']['tmp_name'] = $_FILES['files']['tmp_name'][$key];
            $_FILES['image']['error']    = $_FILES['files']['error'][$key];
            $_FILES['image']['size']     = $_FILES['files']['size'][$key];
    
            $config['file_name'] = rand() . '-' . $image_name;
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $upload_data = $this->upload->data();
                $images[] = $upload_data['file_name']; // Store uploaded file name
            } else {

                print_r($this->upload->display_errors());
                die;
                return ['status' => false, 'error' => $this->upload->display_errors()];
            
            }
        }
           foreach ($images as $key => $value) {
                $data = [
                    'image'       => $value,
                    'event_id'  => $id,
                ];
                $insert_status = $this->db->insert('events_images', $data);
            }

        $updateData['title']=$_POST['title'];
        $updateData['discription']=$_POST['discription'];

        return $this->db->update('events', $updateData);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('events', ['id' => $id]);
    }

}