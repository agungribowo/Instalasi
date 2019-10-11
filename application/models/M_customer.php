<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_customer extends CI_Model 
{
                        
    public function insert_customer($data){
        return $this->db->insert('tbl_customer', $data);
    }
                        
}    
                        