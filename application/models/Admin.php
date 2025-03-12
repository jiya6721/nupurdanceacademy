<?php
class Admin extends CI_Model{
    public function insert_user($data) {
        return $this->db->insert('admin', $data);
    }
}