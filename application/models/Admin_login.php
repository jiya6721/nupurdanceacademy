<?php
class Admin_login extends CI_Model {

    // Verify login credentials
    public function can_login($name, $password) {
        $this->db->where('name', $name);
        $query = $this->db->get('admin');

        if ($query->num_rows() == 1) {
            $admin = $query->row();
            if (password_verify($password, $admin->password)) {
                return $admin;
            }
        }
        return false;
    }
}
?>
