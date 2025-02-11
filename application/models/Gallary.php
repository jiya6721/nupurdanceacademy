<?php
class Gallary extends CI_Model{

    public function get_gallary(){

           $query = $this->db->get("gallary");

        return $query->result();

     }

     public function get_gallary_by_id($id)
    {
        return $this->db->get_where('gallary', ['id' => $id])->row();
    }

    public function insert_entry()
    {
        // Load the Upload library
        $config['upload_path']   = 'public/uploads/gallary'; // Path to save uploaded files
        $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx|mp4'; // Allowed file types
        $config['max_size']      = 409600; // Maximum file size in KB (200 MB)
        $config['encrypt_name']  = true; // Encrypt file names to avoid conflicts
    
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
        $this->load->helper('date');
        // Gather other form input data
        $data = [
            'name' => $this->input->post('name', true),
            'created_at' => date('Y-m-d'),
            'file'  => $file_name // Store the file name/path in the database
        ];
    
        // Insert data into the database
        $insert_status = $this->db->insert('gallary', $data);
    
        if ($insert_status) {
            return ['status' => true, 'insert_id' => $this->db->insert_id()]; // Return success and record ID
        } else {
            return ['status' => false, 'error' => 'Failed to insert record.']; // Return error message
        }
    }
    
    public function update_entry($id, $data)
    {
        $this->db->where('id', $id);
$updateData=[];
            // print_r($data['file']['name']);die;
        if(!empty($data['file']['name'])){
            $config['upload_path']   = 'public/uploads/gallary'; 
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx'; 
            $config['encrypt_name']  = true;
            $this->load->library('upload', $config);
            $upload_status = null;
            if (!$this->upload->do_upload('file')) {
                $upload_status = $this->upload->display_errors();
                return ['status' => false, 'error' => $upload_status]; 
            } else {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name']; 
                $updateData['file']=$file_name;
            }
        }

        
        $updateData['name']=$data['name'];


        return $this->db->update('gallary', $updateData);
    }

    public function delete_entry($id)
    {
        return $this->db->delete('gallary', ['id' => $id]);
    }

}