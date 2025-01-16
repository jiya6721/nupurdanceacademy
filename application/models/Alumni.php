
<?php



class Alumni extends CI_Model{



    public function get_alumni(){
        $query = $this->db->get("alumni");

        return $query->result();

    }





    public function insert_entry()
    {
        // Load the Upload library
        $config['upload_path']   = 'public/uploads/alumni'; // Path to save uploaded files
        $config['allowed_types'] = 'rtf|cvs|txt|pdf|doc|docx|wpd|odt'; // Allowed file types
        $config['max_size']      = 2048; // Maximum file size in KB (2 MB)
        $config['encrypt_name']  = true; // Encrypt file names to avoid conflicts
        // print_r($config['upload_path']);
        // die;
        $this->load->library('upload', $config);
    
        // Initialize response data
        $upload_status = null;
    
        if (!$this->upload->do_upload('file')) {
            // Handle upload error
            $upload_status = $this->upload->display_errors();
            return ['status' => false, 'error' => $upload_status]; // Return error details
        } else {
            // Handle successful upload
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name']; // Get the uploaded file name
        }
    
        // Gather other form input data
        $data = [
            'name' => $this->input->post('name', true),
            'year' => $this->input->post('year', true),
            'file'  => $file_name // Store the file name/path in the database
        ];
    
        // Insert data into the database
        $insert_status = $this->db->insert('alumni', $data);
       
        if ($insert_status) {
            return ['status' => true, 'insert_id' => $this->db->insert_id()]; // Return success and record ID
        } else {
            return ['status' => false, 'error' => 'Failed to insert record.']; // Return error message
        }
    }
    
}