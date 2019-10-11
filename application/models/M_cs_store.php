<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_cs_store extends CI_Model {
                        
    public function simpan_cs_store($upload_foto)
    {
        $data = [
            'kode_cs_store' => $this->input->post('kode_cs_store'),
            'nama_cs_store' => $this->input->post('nama_cs_store'),
            'no_hp'         => $this->input->post('no_hp'),
            'alamat'        => $this->input->post('alamat'),
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'foto'          => $upload_foto
        ];
        
        return $this->db->insert('tbl_cs_store', $data);
    }

    public function edit_cs_store($foto)
    {
        $kode_cs_store = $this->input->post('edit_kode_cs_store');
        $password   = $this->input->post('edit_password');

        if ($password != NULL || $password != "") {
            $data = [
                'nama_cs_store' => $this->input->post('edit_nama_cs_store'),
                'no_hp'         => $this->input->post('edit_no_hp'),
                'alamat'        => $this->input->post('edit_alamat'),
                'username'      => $this->input->post('edit_username'),
                'password'      => md5($this->input->post('edit_password')),
                'foto'          => $foto
            ];
        } else {
            $data = [
                'nama_cs_store' => $this->input->post('edit_nama_cs_store'),
                'no_hp'         => $this->input->post('edit_no_hp'),
                'alamat'        => $this->input->post('edit_alamat'),
                'username'      => $this->input->post('edit_username'),
                'foto'          => $foto
            ];
        }
        
        $this->db->where('kode_cs_store', $kode_cs_store);
        return $this->db->update('tbl_cs_store', $data);
    }
}    
                        