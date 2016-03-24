<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		if ($this->session->userdata('username') == ''){
			redirect(site_url(),'refresh');
		}
		 if ($this->session->userdata('level') != 'Admin'){
		 	$this->logout();
		 }
		$data['list'] = $this->m_user->get_all();
		$this->load->view('header');
		$this->load->view('v_user',$data);
		$this->load->view('footer');
	}
	public function add(){
		if ($this->input->post()){
			$data = array(
				'kd_user' => $this->input->post('kode_user'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level' => $this->input->post('level')
			);
			$this->m_user->insert($data);
			redirect('user','refresh');
		}
		$this->load->view('header');
		$this->load->view('new_user');
		$this->load->view('footer');
	}
	public function delete($kode){
		$sql = "delete from user where kd_user='".$kode."'";
		$this->db->query($sql);
		redirect(site_url('user'),'refresh');
	}

	public function login(){
		if ($this->session->userdata('username') !=''){
			$this->cek_role();
		}
		if ($this->input->post()){
			$uname = $this->input->post('username');
			$passwd = $this->input->post('password');
			$cek = $this->m_user->cek_username($uname);
			if (!empty($cek)){
				if ($cek->password === $passwd){
					$this->session->set_userdata(
						array(
							'kd_user' => $cek->kd_user,
							'username' => $cek->username,
							'level' => $cek->level
						)
					);
					$this->cek_role();
				}else{
					$data['error'] = "Password salah";
				}
			}else{
				$data['error'] = "Username salah";
			}
		}
		$data['title'] = "Login Page";
		$this->load->view('header');
		$this->load->view('v_login',$data);
		$this->load->view('footer');
	}

	public function logout(){
		$this->session->set_userdata(array('username'=>'','kd_user'=>'','level'=>''));
		$this->session->sess_destroy();
		redirect(site_url());
	}

	private function cek_role(){
		if ($this->session->userdata('level') === 'Admin'){
			redirect('user','refresh');
		}else{
			redirect('penjualan','refresh');
		}
	}
}
