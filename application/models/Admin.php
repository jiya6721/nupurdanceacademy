<?php
class Admin extends CI_Model{
    public function insert_user($data) {
        return $this->db->insert('admin', $data);
    }

    public function can_login($email, $password){
        $this->db->where('email', $email);
        $query = $this->db->get('admin');

        if ($query->num_rows() == 1) {
            $admin = $query->row();
            // print_r($admin); exit;
            if (password_verify($password, $admin->password)) {
                return $admin;
            }
        }
        return false;
    }
    

}