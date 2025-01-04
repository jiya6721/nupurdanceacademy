
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
        $this->password     = $_POST['password'];

        $this->db->insert('users', $this);
        // $data = array(

        //     'title' => $this->input->post('title'),

        //     'description' => $this->input->post('description')

        // );

        // return $this->db->insert('items', $data);

    }

}