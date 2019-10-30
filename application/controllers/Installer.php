<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Installer extends CI_Controller {

    public function index()
    {
        $kode_installer = $this->session->userdata('kode_installer');
        $data_parse = [
            'data_laporan' => $this->db->select('*')->from('tbl_jadwal_instalasi')->join('tbl_permintaan', 'tbl_jadwal_instalasi.kode_permintaan = tbl_permintaan.kode_permintaan', 'left')->join('tbl_customer', 'tbl_jadwal_instalasi.kode_customer = tbl_customer.kode_customer', 'left')->join('tbl_produk', 'tbl_jadwal_instalasi.kode_produk = tbl_produk.kode_produk', 'left')->join('tbl_installer', 'tbl_jadwal_instalasi.kode_installer = tbl_installer.kode_installer', 'left')->where('tbl_installer.kode_installer', $kode_installer)->get()->result_array(),
        ];

        return view('installer.view_installer', ['data' => $data_parse]);
    }
    
    public function update_hasil()
    {
        $id = $this->input->post('id_jadwal_instalasi');
        $data = [
            'hasil_perbaikan'   => $this->input->post('hasil_perbaikan'),
            'hasil_kerja'       => $this->input->post('hasil_kerja'),
            'komentar'          => $this->input->post('komentar'),
            'biaya_service'     => $this->input->post('biaya_service'),
            'biaya_transport'   => $this->input->post('biaya_transport'),
            'status'            => 1
        ];

        $this->db->where('id_jadwal_instalasi', $id);
        $result = $this->db->update('tbl_jadwal_instalasi', $data);
        if ($result > 0) {
            $this->session->set_flashdata('simpan', 'Berhasil Update Hasil Kerja');
        } else {
            $this->session->set_flashdata('gagal', 'Gagal Update Hasil Kerja');
        }
        redirect('installer');
    }
}        
                            