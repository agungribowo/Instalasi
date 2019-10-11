<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_installer extends CI_Model {
                        
    public function simpan_installer($foto){
        $data = [
            'kode_installer'    => kode_installer(),
            'nama_installer'    => $this->input->post('nama_installer'),
            'no_hp'             => $this->input->post('no_hp'),
            'alamat'            => $this->input->post('alamat'),
            'username'          => $this->input->post('username'),
            'password'          => md5($this->input->post('password')),
            'foto'              => $foto
        ];

        return $this->db->insert('tbl_installer', $data);
    }

    public function edit_installer($foto)
    {
        $kode_installer = $this->input->post('edit_kode_installer');
        $password   = $this->input->post('edit_password');

        if ($password != NULL || $password != "") {
            $data = [
                'nama_installer' => $this->input->post('edit_nama_installer'),
                'no_hp'         => $this->input->post('edit_no_hp'),
                'alamat'        => $this->input->post('edit_alamat'),
                'username'      => $this->input->post('edit_username'),
                'password'      => md5($this->input->post('edit_password')),
                'foto'          => $foto
            ];
        } else {
            $data = [
                'nama_installer' => $this->input->post('edit_nama_installer'),
                'no_hp'         => $this->input->post('edit_no_hp'),
                'alamat'        => $this->input->post('edit_alamat'),
                'username'      => $this->input->post('edit_username'),
                'foto'          => $foto
            ];
        }
        
        $this->db->where('kode_installer', $kode_installer);
        return $this->db->update('tbl_installer', $data);
    }
}