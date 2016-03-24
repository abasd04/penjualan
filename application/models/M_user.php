<?php 

class M_user extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    public function insert($data = array()) {
        if ($this->db->insert('user', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }

    public function get_all(){
    	return $this->db->get('user')->result();
    }

    public function cek_username($username){
    	$this->db->where(array('username'=>$username));
    	$res = $this->db->get('user');
    	if ($res->num_rows() > 0){
    		return $res->row();
    	}
    	return false;
    }
}