
<?php



class User extends CI_Model{



    // public function get_itemCRUD(){

    //     if(!empty($this->input->get("search"))){

    //       $this->db->like('title', $this->input->get("search"));

    //       $this->db->or_like('description', $this->input->get("search")); 

    //     }

    //     $query = $this->db->get("items");

    //     return $query->result();

    // }



    public function insert_entry()

    {    
        $this->name    = $_POST['frist_name']; // please read the below note
        $this->email  = $_POST['email'];

        $this->db->insert('users', $this);

    $this->password = password_hash($data['password'], PASSWORD_BCRYPT); // bcrypt is a secure hashing algorithm

    $insert_status = $this->db->insert('users', $this);

    if ($insert_status) {
        return $this->db->insert_id(); // Returns the inserted record ID
    } else {
        return false; // Return false if the insertion failed
    }
     
    }

}