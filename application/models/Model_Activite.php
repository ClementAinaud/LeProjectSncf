<?php
class Model_Activite extends CI_Controller{
    
    public function GetAllActivite(){
        
      $sql = $this->db->query("select * from activite");
      return $sql -> result();
        
        
    }
}