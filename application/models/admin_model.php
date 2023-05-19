<?php
class admin_model extends CI_MODEL
{
    public function insertData($data)
    {
        $dataset = array(
            "Item_Name" => $data["fname"],
            "Grade" => $data['lname'],
            "ISBN" => $data['prof'],
            "Book_Author" => $data['city'],
            "Item_Status" => $data['country'],
            "Category_Name" => $data['mail'],
            "Price" => $data["mobile"],


            "sk1" => $data['sk1'],
            "per1" => $data["per1"],
            "sk2" => $data["sk2"],
            "per2" => $data["per2"],
            "sk3" => $data["sk3"],
            "per3" => $data["per3"],
            "sk4" => $data["sk4"],
            "per4" => $data["per4"],
            "sk5" => $data["sk5"],
            "per5" => $data["per5"],

            "la1" => $data['la1'],
            "pe1" => $data["pe1"],
            "la2" => $data["la2"],
            "pe2" => $data["pe2"],
            "la3" => $data["la3"],
            "pe3" => $data["pe3"],


            "wo1" => $data['wo1'],
            "from1" => $data["from1"],
            "to1" => $data["to1"],
            "des1" => $data["des1"],
            "wo2" => $data["wo2"],
            "from2" => $data["from2"],
            "to2" => $data['to2'],
            "des2" => $data['des2'],


            "uni1" => $data["uni1"],
            "fro1" => $data["fro1"],
            "t1" => $data["t1"],
            "de1" => $data["de1"],
            "uni2" => $data["uni2"],
            "fro2" => $data['fro2'],
            "t2" => $data["t2"],
            "de2" => $data["de2"]
            
        );
        var_dump($dataset);
        // return $r = $this->db->insert('admin_book', $dataset);
        
    }
}