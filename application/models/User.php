
<?php
class User extends CI_Model{
    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    // public function insert_entry()

    // {    
    //     $this->name    = $_POST['name']; // please read the below note
    //     $this->email  = $_POST['email'];

    //     $this->db->insert('users', $this);

    // $this->password = password_hash($_POST['password'], PASSWORD_BCRYPT); // bcrypt is a secure hashing algorithm

    // $insert_status = $this->db->insert('users', $this);

    // if ($insert_status) {
    //     return $this->db->insert_id(); // Returns the inserted record ID
    // } else {
    //     return false; // Return false if the insertion failed
    // }
     
    // }

}