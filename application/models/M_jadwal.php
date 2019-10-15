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
    
    public function data_jadwal($dari, $sampai)
    {
        return $this->db->select('*')->from('tbl_jadwal_instalasi')->join('tbl_permintaan', 'tbl_jadwal_instalasi.kode_permintaan = tbl_permintaan.kode_permintaan', 'left')->join('tbl_customer', 'tbl_jadwal_instalasi.kode_customer = tbl_customer.kode_customer', 'left')->join('tbl_produk', 'tbl_jadwal_instalasi.kode_produk = tbl_produk.kode_produk', 'left')->join('tbl_installer', 'tbl_jadwal_instalasi.kode_installer = tbl_installer.kode_installer', 'left')->where("STR_TO_DATE(tbl_jadwal_instalasi.tanggal_instalasi, '%d/%m/%Y') >=", $dari)->where("STR_TO_DATE(tbl_jadwal_instalasi.tanggal_instalasi, '%d/%m/%Y') <=", $sampai)->get();
    }
}    
                        