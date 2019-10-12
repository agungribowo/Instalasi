<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_jadwal extends CI_Model {
                        
    public function insert_jadwal_instalasi(){
        $nama_customer = $this->input->post('nama_customer');
        $nama_produk = $this->input->post('nama_produk');
        $data = [
            'kode_instalasi'    => $this->input->post('kode_instalasi'),
            'kode_permintaan'   => $this->input->post('kode_permintaan'),
            'kode_customer'     => get_data_customer($nama_customer)['kode_customer'],
            'kode_produk'       => get_data_produk($nama_produk)['kode_produk'],
            'kode_installer'    => $this->input->post('installer'),
            'tanggal_instalasi' => $this->input->post('tanggal_instalasi'),
        ];
        return $this->db->insert('tbl_jadwal_instalasi', $data);
    }                       
}    
                        