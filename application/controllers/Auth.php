<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['m_customer', 'm_produk', 'm_permintaan']);
    }

    public function index()
    {
        return view('login');
    }

    public function check_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            redirect('auth');
        } else {
            $this->_sistem_login();
        }
    }

    private function _sistem_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $data_cs_store = $this->db->get_where('tbl_cs_store', ['username' => $username, 'password' => $password])->row_array();
        $data_installer = $this->db->get_where('tbl_installer', ['username' => $username, 'password' => $password])->row_array();
        // echo json_encode($data_installer);
        // die();
        
        if ($data_cs_store) {
            if ($data_cs_store['password'] == $password) {
                $data_cs_store['cs_store'] = 'cs_store';
                $this->session->set_userdata($data_cs_store);
                redirect('page');
            } else {
                $this->session->set_flashdata('gagal', 'Kamu Gagal Login');
                redirect('auth');
            }
        } else if($data_installer) {
            if ($data_installer['password'] == $password) {
                $data_cs_store['installer'] = 'installer';
                $this->session->set_userdata($data_installer);
                redirect('installer');
            } else {
                $this->session->set_flashdata('gagal', 'Kamu Gagal Login');
            }
        } else {
            $this->session->set_flashdata('gagal', 'Kamu Gagal Login');
        }
        redirect('auth');
    }

    public function permintaan()
    {
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'trim|required');
        $this->form_validation->set_rules('no_hp_customer', 'No Hp Customer', 'trim|required');
        $this->form_validation->set_rules('alamat_customer', 'Alamat Customer', 'trim|required');
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required');
        $this->form_validation->set_rules('jenis_produk', 'Jenis Produk', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            return view('permintaan');
        } else {
            $data_customer = [
                'kode_customer' => kode_customer(),
                'nama_customer' => $this->input->post('nama_customer'),
                'no_hp'         => $this->input->post('no_hp_customer'),
                'alamat'        => $this->input->post('alamat_customer'),
            ];

            $data_produk = [
                'kode_produk'   => kode_produk(),
                'nama_produk'   => $this->input->post('nama_produk'),
                'jenis_produk'   => $this->input->post('jenis_produk')
            ];

            $data_permintaan = [
                'kode_permintaan'       => kode_permintaan(),
                'kode_customer'         => $data_customer['kode_customer'],
                'kode_produk'           => $data_produk['kode_produk'],
                'tanggal_permintaan'    => date('d-m-Y')
            ];

            $result_customer = $this->m_customer->insert_customer($data_customer);
            if ($result_customer > 0) {
                $result_produk = $this->m_produk->insert_produk($data_produk);
                if ($result_produk > 0) {
                    $result_permintaan = $this->m_permintaan->insert_permintaan($data_permintaan);
                    if ($result_permintaan > 0) {
                        $this->session->set_flashdata('simpan', 'Kamu Berhasil Membuat Permintaan');
                    } else {
                        $this->session->set_flashdata('simpan', 'Kamu Gagal Membuat Permintaan');
                    }
                } else {
                    $this->session->set_flashdata('simpan', 'Kamu Gagal Membuat Permintaan');
                }
            } else {
                $this->session->set_flashdata('simpan', 'Kamu Gagal Membuat Permintaan');
            }
            redirect();
        }
        
    }
}
                            