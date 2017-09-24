<?php
class Model_Agent extends CI_Controller{
    
    public function GetAllAgents(){
        
      $sql = $this->db->query("select * from agent");
      return $sql -> result();
        
        
    }
}