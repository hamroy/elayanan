<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_proses extends CI_Controller {
	public function index()
	{

		//print_r($this->input->post());
		//cara mengambil  username/password nya di form login
		$user=$this->input->post("username");
		$password=$this->input->post("pass");
		$this->load->model('m_login');
		$cek = $this->m_login->cek_login($user,$password)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'lvl_akses' => 1, //1 = admin
				'status' => "login",
				'login' => true 
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('Admin');
 
		}else{
			redirect(base_url("welcome"));
		}
	}
 
	 function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
