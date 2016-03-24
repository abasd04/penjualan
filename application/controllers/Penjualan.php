<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_penjualan');
	}

	public function index()
	{
		$data['list'] = $this->m_penjualan->get_all();
		$this->load->view('header');
		$this->load->view('v_penjualan',$data);
		$this->load->view('footer');
	}
	public function add(){
		if ($this->session->userdata('username') === ''){
			redirect(site_url());
		}
		if ($this->session->userdata('level') != 'Admin'){
			redirect('user/logout');
		}
		if ($this->input->post()){
			$data = array(
				'kode_transaksi' => $this->input->post('kode_transaksi'),
				'nama' => $this->input->post('nama'),
				'jenis' => $this->input->post('jenis'),
				'harga' => $this->input->post('harga'),
				'pajak' => $this->input->post('pajak'),
				'total' => $this->input->post('total')
			);
			$this->m_penjualan->insert($data);
			redirect(site_url('penjualan'),'refresh');
		}
		$list_jenis[''] = "Pilih Jenis";
		$list_jenis['Mobil'] = "Mobil";
		$list_jenis['Motor'] = "Motor";
		$data['list_jenis'] = $list_jenis;
		$this->load->view('header');
		$this->load->view('v_new',$data);
		$this->load->view('footer');
	}
	public function delete($kode){
		if ($this->session->userdata('username') === ''){
			redirect(site_url());
		}
		if ($this->session->userdata('level') != 'Admin'){
			redirect('user/logout');
		}
		$sql = "delete from transaksi where kode_transaksi='".$kode."'";
		$this->db->query($sql);
		redirect(site_url('penjualan'),'refresh');
	}

	
}
