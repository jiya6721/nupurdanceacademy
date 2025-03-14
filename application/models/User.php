
<?php
class User extends CI_Model{
    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }
    public function can_login($email, $password){
        $this->db->where('email', $email);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            $user = $query->row();
            // print_r($user); exit;
            if (password_verify($password, $admin->password)) {
                return $user;
            }
        }
        return false;
    }
    
}