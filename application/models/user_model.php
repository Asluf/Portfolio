<?php
class user_model extends CI_MODEL
{   
    
    public function insertData($data)
    {   
        
        $query = $this->db->get_where('personal', array('nic' => $data['nic']));
        if ($query->num_rows() > 0) {
            $this->db->where('nic',$data['nic']);
            $this->db->delete('personal');

            $this->db->where('nic',$data['nic']);
            $this->db->delete('skill');

            $this->db->where('nic',$data['nic']);
            $this->db->delete('language');

            $this->db->where('nic',$data['nic']);
            $this->db->delete('work');

            $this->db->where('nic',$data['nic']);
            $this->db->delete('university');
        }

        $personal = array(
            "nic" => $data["nic"],
            "fname" => $data["fname"],
            "lname" => $data['lname'],
            "prof" => $data['prof'],
            "city" => $data['city'],
            "country" => $data['country'],
            "mail" => $data['mail'],
            "mobile" => $data["mobile"],
            "about_me" => $data['about']
        );
        $skills = array(
            "nic" => $data["nic"],
            "sk1" => $data['sk1'],
            "sk2" => $data["sk2"],
            "sk3" => $data["sk3"],
            "sk4" => $data["sk4"],
            "sk5" => $data["sk5"]
        );
        $languages = array(
            "nic" => $data["nic"],
            "la1" => $data['la1'],
            "la2" => $data["la2"],
            "la3" => $data["la3"],
           
        );
        $works = array(
            "nic" => $data["nic"],
            "wo1" => $data['wo1'],
            "from1" => $data["from1"],
            "to1" => $data["to1"],
            "des1" => $data["des1"],
            "wo2" => $data["wo2"],
            "from2" => $data["from2"],
            "to2" => $data['to2'],
            "des2" => $data['des2'],
        );
        $unis = array(
            "nic" => $data["nic"],
            "uni1" => $data["uni1"],
            "f1" => $data["f1"],
            "t1" => $data["t1"],
            "de1" => $data["de1"],
            "uni2" => $data["uni2"],
            "f2" => $data['f2'],
            "t2" => $data["t2"],
            "de2" => $data["de2"]

        );

        $r = $this->db->insert('personal', $personal);
        if($r){
            $r2 = $this->db->insert('skill', $skills);
            if($r2){
                $r3 = $this->db->insert('language', $languages);
                if($r3){
                    $r4 = $this->db->insert('work', $works);
                    if($r4){
                        $r5 = $this->db->insert('university', $unis);
                        $_SESSION['nic'] = $data['nic'];
                        echo $data['nic'];
                    }else{
                        echo "error";
                    }
                }else{
                    echo "error";
                }
            }
            else{
                echo "error";
            }
        }else{
            echo "error";
        }
    }
  
    public function getCV()
    {   
        $data = $this->session->userdata('Nic');
        $query = $this->db->get_where('personal', array('nic' => $data));
        if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }
    // Ishani
    public function get_personal($data)
    {
        $query = $this->db->get_where('personal', array('nic' => $data));
        return $query->result_array();
    }

     public function get_skill($data)
    {
        $query = $this->db->get_where('skill', array('nic' => $data));
        return $query->result_array();
    }
    public function get_language($data)
    {
        $query = $this->db->get_where('language', array('nic' => $data));
        return $query->result_array();
    }
    public function get_work($data)
    {
        $query  = $this->db->get_where('work', array('nic' => $data));
        return $query->result_array();
    }
    public function get_uni($data)
    {
        $query = $this->db->get_where('university', array('nic' => $data));
        return $query->result_array();
    }
    
}
