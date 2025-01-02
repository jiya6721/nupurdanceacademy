<?php  
  
class login_model extends CI_Model {  
  
    public function log_in_correctly() {  
  
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    // Verify the username and password against the database here
    // For example:
    $this->db->where('username', $username);
    $this->db->where('password', md5($password));  // or use a more secure method
    $query = $this->db->get('user');
    if ($query->num_rows() > 0) {
        $user = $query->row();
        return password_verify($password, $user->password);

    }  
    return false;
    
}  
?>