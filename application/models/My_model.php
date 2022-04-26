<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My_model extends CI_Model{

    public function getStudent()
    {
        return $this->db->get('student_info');
    }

    public function displayStdInfo()
    {
         $this->db->select('*');
         $query= $this->db->get('student_info');
         return $query->result();

    }

    public function getStdInfo($id)
    {
        $user_id = $id;
        $this->db->select('*');
        $this->db->from('student_info');
        $this->db->where('id',$user_id);
        return $this->db->get();
    }

    
    public function addStdInfo($data){
        $this->db->insert('student_info',$data);
        return true;
    }

    public function deleteStdInfo($id){
        $this->db->where("id", $id);
        $this->db->delete("student_info");
        return true;
    }
  

    

}


?>