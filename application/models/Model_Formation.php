<?php

class Model_Formation extends CI_Model{
    
    public function GetAllFormationsByActivite($numero)
    {
        
        $sql = $this->db->query("select * from formation where numeroActivite=".$numero);
        return $sql->result();
    }
}