<?php 

    function kode_cs_store()
    {
        $CI =& get_instance();
        $query = $CI->db->query("SELECT MAX(id_cs_store) AS kd_max FROM tbl_cs_store");
        
        $kd = "";
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        $kodejadi = "CS" . $kd;
        return $kodejadi;
    }

    function kode_customer()
    {
        $CI =& get_instance();
        $query = $CI->db->query("SELECT MAX(id_customer) AS kd_max FROM tbl_customer");
        
        $kd = "";
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        $kodejadi = "C" . $kd;
        return $kodejadi;
    }

    function kode_produk()
    {
        $CI =& get_instance();
        $query = $CI->db->query("SELECT MAX(id_produk) AS kd_max FROM tbl_produk");
        
        $kd = "";
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        $kodejadi = "P" . $kd;
        return $kodejadi;
    }

    function kode_permintaan()
    {
        $CI =& get_instance();
        $query = $CI->db->query("SELECT MAX(id_permintaan) AS kd_max FROM tbl_permintaan");
        
        $kd = "";
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        $kodejadi = "PM" . $kd;
        return $kodejadi;
    }

    function kode_installer()
    {
        $CI =& get_instance();
        $query = $CI->db->query("SELECT MAX(id_installer) AS kd_max FROM tbl_installer");
        
        $kd = "";
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        $kodejadi = "I" . $kd;
        return $kodejadi;
    }
    
    function kode_instalasi()
    {
        $CI =& get_instance();
        $query = $CI->db->query("SELECT MAX(id_jadwal_instalasi) AS kd_max FROM tbl_jadwal_instalasi");
        
        $kd = "";
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        $kodejadi = "JI" . $kd;
        return $kodejadi;
    }

    function get_data_customer($nama_customer)
    {
        $CI =& get_instance();
        return $CI->db->get_where('tbl_customer', ['nama_customer' => $nama_customer])->row_array();
    }

    function get_data_produk($nama_produk)
    {
        $CI =& get_instance();
        return $CI->db->get_where('tbl_produk', ['nama_produk' => $nama_produk])->row_array();
    }
?>