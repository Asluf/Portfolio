<?php
class welcome_model extends CI_MODEL
{ 
    public function verifyuser($data)
    {
        $query = $this->db->get_where('user', array('username' =>$data['username'], 'password' => $data['password']));
        return $query->result_array();
    }
   
    public function register($data)
    {
        $dataset = array(
            "nic" => $data["nic"],
            "name" => $data["name"],
            "username" => $data["username"],
            "password" => $data["password"]
            
        );
        $r = $this->db->insert('user', $dataset);
        echo $r;
    }

}