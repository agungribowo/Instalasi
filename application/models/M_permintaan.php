<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_permintaan extends CI_Model {
    public function insert_permintaan($data) {
        return $this->db->insert('tbl_permintaan', $data);
    }                       
}    
                        