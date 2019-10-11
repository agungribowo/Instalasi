<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Page extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['m_cs_store', 'm_installer']);
    }

    public function index()
    {
        $active = 'dashboard';
        return view('dashboard', ['active' => $active]);
    }
    
    public function cs_store()
    {
        $active     = "cs_store";
        $data       = $this->db->get('tbl_cs_store')->result_array();
        $kode_cs_store = kode_cs_store();
        return view('cs_store.list', ['cs_store' => $data, 'kode_cs_store' => $kode_cs_store, 'active' => $active]);
    }

    public function cs_store_tambah()
    {
        $this->form_validation->set_rules('kode_cs_store', 'Kode CS Store', 'trim|required');
        $this->form_validation->set_rules('nama_cs_store', 'Nama CS Store', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            $upload_foto = $this->upload_foto();
            $result_insert = $this->m_cs_store->simpan_cs_store($upload_foto);
            if ($result_insert > 0) {
                $this->session->set_flashdata('simpan', 'Has Been Send');
            } else {
                $this->session->set_flashdata('gagal', 'Has Not Been Send');
            }
            redirect('page/cs_store');
        } else {
            redirect('page/cs_store');
        }
    }

    public function cs_store_edit()
    {
        
        $this->form_validation->set_rules('edit_kode_cs_store', 'Kode Cs Store', 'trim|required');
        $this->form_validation->set_rules('edit_nama_cs_store', 'Nama Cs Store', 'trim|required');
        $this->form_validation->set_rules('edit_no_hp', 'No Hp', 'trim|required');
        $this->form_validation->set_rules('edit_alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('edit_username', 'Username', 'trim|required');
        $this->form_validation->set_rules('edit_password', 'Password', 'trim');
        
        if ($this->form_validation->run() == TRUE) {
            $data['cs_store'] = $this->db->get_where('tbl_cs_store', ['kode_cs_store' => $this->input->post('kode_cs_store')])->row_array();
            $upload_foto = $_FILES['edit_foto']['name'];

            if ($upload_foto) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './_assets/img/foto_profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('edit_foto')) {
                    $foto = $data['cs_store']['foto'];
                    if ($foto != 'default.jpg') {
                        unlink(FCPATH . '_assets/img/foto_profile/' . $foto);
                    }

                    $new_image = $this->upload->data('file_name');
                    $result_insert = $this->m_cs_store->edit_cs_store($new_image);
                    if ($result_insert > 0) {
                        $this->session->set_flashdata('simpan', 'Has Been Send');
                    } else {
                        $this->session->set_flashdata('gagal', 'Has Not Been Send');
                    }
                } echo "gagal";
            }

            redirect('page/cs_store');
        } else {
            redirect('page/cs_store');
        }
        
    }

    public function cs_store_hapus()
    {
        $id_cs_store = $this->uri->segment(3);
        $this->db->where('id_cs_store', $id_cs_store);
        $this->db->delete('tbl_cs_store');

        $this->session->set_flashdata('simpan', 'Has Been Deleted');
        redirect('page/cs_store');
    }

    public function installer()
    {
        $active     = "installer";
        $data       = $this->db->get('tbl_installer')->result_array();
        $kode_installer = kode_installer();
        return view('installer.list', ['installer' => $data, 'kode_installer' => $kode_installer, 'active' => $active]);
    }

    public function installer_tambah()
    {
        $this->form_validation->set_rules('kode_installer', 'Kode Installer', 'trim|required');
        $this->form_validation->set_rules('nama_installer', 'Nama Installer', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            $path = './_assets/img/foto_profile/installer';
            $upload_foto = $this->upload_foto($path);
            $result_insert = $this->m_installer->simpan_installer($upload_foto);
            if ($result_insert > 0) {
                $this->session->set_flashdata('simpan', 'Berhasil Menambah Installer');
            } else {
                $this->session->set_flashdata('gagal', 'Gagal Menambah Installer');
            }
            redirect('page/installer');
        } else {
            redirect('page/installer');
        }
    }

    public function installer_edit()
    {
        $this->form_validation->set_rules('edit_kode_installer', 'Kode Installer', 'trim|required');
        $this->form_validation->set_rules('edit_nama_installer', 'Nama Installer', 'trim|required');
        $this->form_validation->set_rules('edit_no_hp', 'No Hp', 'trim|required');
        $this->form_validation->set_rules('edit_alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('edit_username', 'Username', 'trim|required');
        $this->form_validation->set_rules('edit_password', 'Password', 'trim');
        
        if ($this->form_validation->run() == TRUE) {
            $data['installer'] = $this->db->get_where('tbl_installer', ['kode_installer' => $this->input->post('kode_installer')])->row_array();
            $upload_foto = $_FILES['edit_foto']['name'];

            if ($upload_foto) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './_assets/img/foto_profile/installer';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('edit_foto')) {
                    $foto = $data['installer']['foto'];
                    if ($foto != 'default.jpg') {
                        unlink(FCPATH . '_assets/img/foto_profile/installler/' . $foto);
                    }

                    $new_image = $this->upload->data('file_name');
                    $result_insert = $this->m_installer->edit_installer($new_image);
                    if ($result_insert > 0) {
                        $this->session->set_flashdata('simpan', 'Berhasil Edit Installer');
                    } else {
                        $this->session->set_flashdata('gagal', 'Gagal Edit Installer');
                    }
                } echo "gagal";
            }

            redirect('page/installer');
        } else {
            redirect('page/installer');
        }
        
    }

    public function installer_hapus()
    {
        $id_installer = $this->uri->segment(3);
        $this->db->where('id_installer', $id_installer);
        $this->db->delete('tbl_installer');

        $this->session->set_flashdata('simpan', 'Berhasil Hapus Installer');
        redirect('page/installer');
    }

    public function permintaan()
    {
        $active = "permintaan";
        $data   = $this->db->select('*')->from('tbl_permintaan')->join('tbl_customer', 'tbl_permintaan.kode_customer = tbl_customer.kode_customer', 'left')->join('tbl_produk', 'tbl_permintaan.kode_produk = tbl_produk.kode_produk', 'left')->get()->result_array();

        $data_parse = [
            'active'            => $active,
            'data_permintaan'   => $data,
        ];

        return view('permintaan.list', $data_parse);
    }

    public function customer()
    {
        $data_parse = [
            'active'        => 'customer',
            'data_customer' => $this->db->get('tbl_customer')->result_array()
        ];
        return view('customer.list', $data_parse);
    }

    public function upload_foto($path)
    {
		$config['upload_path'] 		= $path;
		$config['allowed_types'] 	= 'jpg|jpeg|png|gif|bmp';
		$config['max_size'] 		= 8048;
		$config['overwrite']		= TRUE;
		
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('foto');
		
        $upload = $this->upload->data();
		return $upload['file_name'];
	}
}        
                            