<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_produk extends CI_Model {
                        
    public function insert_produk($data) {
        return $this->db->insert('tbl_produk', $data);
    }
}                        