<?php
class Event_image extends CI_Model{

    public function get_subscriber()
    {

        $query = $this->db->get("subscribers");

        return $query->result();

    }

    public function validate_user($user_id, $password, $course_id)
    {
        $this->db->where('id', $user_id);
        $this->db->where('password', md5($password)); // Password stored as MD5 hash
        $this->db->where('course_id', $course_id);
        $query = $this->db->get('subscribers');
    
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return false;
    }
    

    public function funcname($id)
    {
        $this->db->select('*');
        $this->db->from('subscribers s'); 
        $this->db->join('course c', 'c.course_id=s.id', 'left');
        $this->db->join('users u', 'u.user_id=s.id', 'left');
        $this->db->where('c.course_id',$id);
        $this->db->where('u.users_id',$id);
        $this->db->order_by('c.track_title','asc');         
        $query = $this->db->get(); 
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }
}