<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
define('STATUS_ACTIVATED', '1');
define('STATUS_NOT_ACTIVATED', '0');
define('ALLOW', '1');
define('NOT_ALLOW', '0');

Class Auth {

    private $ci;
    private $error = array();

    public function __construct() {
        $this->ci = & get_instance();
    }

    public function login($username, $password) {
        if ((strlen($username) > 0) AND (strlen($password) > 0)) {
            if ($userr = $this->ci->m_user->get_by(array('user'=>$username))) {
                $user = $userr->user;
                $pass = $userr->password;
                $aman = $userr->id_keamanan;
                $status = '1';
                $karyawan = $this->ci->m_karyawan->get_by(array('kd_karyawan'=>$userr->id_user));
                if ($pass == md5($password)) {
                    $this->ci->session->set_userdata(array(
                        'username' => $user,
                        'nama_lengkap' => $karyawan->nama_karyawan,
                        'level' => $aman,
                        'status' => ($status == 1) ? STATUS_ACTIVATED : STATUS_NOT_ACTIVATED
                    ));
                    
                    if ($status == 0) {
                        echo "<script>alert('Username atau password salah!!!');
			window.location=('" . site_url() . "');</script>";
                    } else {
                        return true;
                    }
                }
                echo "<script>alert('Password Salah');
			window.location=('" . site_url() . "');</script>";
            } else {
                echo "<script>alert('Username salah!');
			window.location=('" . site_url() . "');</script>";
            }
        }
        return FALSE;
    }

    public function logout() {
        $this->ci->session->set_userdata(array('username' => '', 'nama_lengkap' => '', 'level' => '','status'=>''));
        $this->ci->session->sess_destroy();
    }

    public function sudah_login($activated = TRUE) {
        return $this->ci->session->userdata('status') === ($activated ? STATUS_ACTIVATED : STATUS_NOT_ACTIVATED);
    }

    public function role($level = array()) {
        foreach ($level as $key => $val) {
            $status = $this->ci->session->userdata('level') == $val ? ALLOW : NOT_ALLOW;
            if ($status == 'admin') {
                break;
            }
        }
        return $status;
    }

}

?>