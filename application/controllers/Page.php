<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Page extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['m_cs_store', 'm_installer', 'm_jadwal']);
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
                } else {
                    $this->session->set_flashdata('gagal', 'Gagal Edit Installer');
                };
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
        $data_permintaan  = $this->db->select('*')->from('tbl_permintaan')->join('tbl_customer', 'tbl_permintaan.kode_customer = tbl_customer.kode_customer', 'left')->join('tbl_produk', 'tbl_permintaan.kode_produk = tbl_produk.kode_produk', 'left')->get()->result_array();
        $installer = $this->db->get('tbl_installer')->result_array();

        $data = [];
        $no = 0;
        foreach($data_permintaan as $permintaan) {
            $jadwal = "";
            $disabled = "";
            if ($this->db->get_where('tbl_jadwal_instalasi', ['kode_permintaan' => $permintaan['kode_permintaan']])->row_array() == NULL) {
                $jadwal = "Belum Terjadwal";
                $disabled = "";
            } else {
                $jadwal = "Sudah Terjadwal";
                $disabled = "disabled";
            }

            $data[$no]['kode_permintaan']   = $permintaan['kode_permintaan'];
            $data[$no]['nama_customer']     = $permintaan['nama_customer'];
            $data[$no]['no_hp']             = $permintaan['no_hp'];
            $data[$no]['alamat']            = $permintaan['alamat'];
            $data[$no]['nama_produk']       = $permintaan['nama_produk'];
            $data[$no]['nama_produk']       = $permintaan['nama_produk'];
            $data[$no]['jenis_produk']      = $permintaan['jenis_produk'];
            $data[$no]['tanggal_permintaan']= $permintaan['tanggal_permintaan'];
            $data[$no]['jadwal']            = $jadwal;
            $data[$no]['disabled']          = $disabled;
            $no++;
        }

        $data_parse = [
            'active'            => $active,
            'data_permintaan'   => $data,
            'data_installer'    => $installer,
            'kode_instalasi'    => kode_instalasi()
        ];

        return view('permintaan.list', $data_parse);
    }

    public function jadwal_instalasi()
    {
        $this->form_validation->set_rules('kode_instalasi', 'Kode Instalasi', 'trim|required');
        $this->form_validation->set_rules('kode_permintaan', 'Kode Permintaan', 'trim|required');
        $this->form_validation->set_rules('nama_customer', 'Nama Customer', 'trim|required');
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required');
        $this->form_validation->set_rules('jenis_produk', 'Jenis Produk', 'trim|required');
        $this->form_validation->set_rules('installer', 'Installer', 'trim|required');
        $this->form_validation->set_rules('tanggal_instalasi', 'Tanggal Instalasi', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
            die();
            redirect('page/permintaan');
        } else {
            $result = $this->m_jadwal->insert_jadwal_instalasi();
            if ($result > 0) {
                $this->session->set_flashdata('simpan', 'Berhasil Jadwalkan Instalasi');
            } else {
                $this->session->set_flashdata('gagal', 'Gagal Jadwalkan Instalasi');
            }
        }
        redirect('page/permintaan');
    }

    public function laporan()
    {
        $data_parse = [
            'active'  => "laporan",
            'data_laporan' => $this->db->select('*')->from('tbl_jadwal_instalasi')->join('tbl_permintaan', 'tbl_jadwal_instalasi.kode_permintaan = tbl_permintaan.kode_permintaan', 'left')->join('tbl_customer', 'tbl_jadwal_instalasi.kode_customer = tbl_customer.kode_customer', 'left')->join('tbl_produk', 'tbl_jadwal_instalasi.kode_produk = tbl_produk.kode_produk', 'left')->join('tbl_installer', 'tbl_jadwal_instalasi.kode_installer = tbl_installer.kode_installer', 'left')->get()->result_array(),
        ];

        return view('laporan.list', $data_parse);
    }

    public function laporan_cetak()
    {
        $id_jadwal_instalasi = $this->uri->segment(3);
        
        $data_parse = [
            'active'        => "laporan",
            'data_laporan'  => $this->db->select('*')->from('tbl_jadwal_instalasi')->join('tbl_permintaan', 'tbl_jadwal_instalasi.kode_permintaan = tbl_permintaan.kode_permintaan', 'left')->join('tbl_customer', 'tbl_jadwal_instalasi.kode_customer = tbl_customer.kode_customer', 'left')->join('tbl_produk', 'tbl_jadwal_instalasi.kode_produk = tbl_produk.kode_produk', 'left')->join('tbl_installer', 'tbl_jadwal_instalasi.kode_installer = tbl_installer.kode_installer', 'left')->where('tbl_jadwal_instalasi.id_jadwal_instalasi', $id_jadwal_instalasi)->get()->row_array()
        ];
        return view('laporan.cetak', $data_parse);
    }

    public function customer()
    {
        $data_parse = [
            'active'        => 'customer',
            'data_customer' => $this->db->get('tbl_customer')->result_array()
        ];
        return view('customer.list', $data_parse);
    }

    public function jadwal()
    {
        if (isset($_POST['submit'])) {
			$dari = $this->input->post('dari_tanggal');
			$sampai = $this->input->post("sampai_tanggal");
		} else {
			$dari = date("Y-m-d");
            $sampai = date("Y-m-d");
		}

        $data_parse = [
            'active'        => 'jadwal',
            'data_jadwal'   => $this->m_jadwal->data_jadwal($dari, $sampai)->result_array(),
            'dari'          => $dari,
			'sampai'        => $sampai
        ];

        return view('jadwal.list', $data_parse);
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
                            