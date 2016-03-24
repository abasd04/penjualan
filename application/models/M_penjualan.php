<?php 

class M_penjualan extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    public function insert($data = array()) {
        if ($this->db->insert('transaksi', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }

    public function get_all(){
    	return $this->db->get('transaksi')->result();
    }
}