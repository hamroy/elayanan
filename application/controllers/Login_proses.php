<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_proses extends CI_Controller {

        public function __construct()
        {
            parent::__construct();

            $this->load->model('Mpegawai');
        }

	public function index()
	{

		//print_r($this->input->post());
		//cara mengambil  username/password nya di form login
		$user=$this->input->post("username");
		$password=$this->input->post("pass");
		$this->load->model('m_login');
		$cek = $this->m_login->cek_login($user,$password);
		$cekuserpass = $this->Mpegawai->cek_pegawai_by_userpasss($user,$password);

		if($cek->num_rows() > 0 OR $cekuserpass->num_rows()){
 			
 			if($cek->row()->lvl_akses == 1)
 			{
				$data_session = array(
					'nama' => $user,
					'lvl_akses' => 1, //1 = admin
					'status' => "login",
					'login' => true 
					);
	 
				$this->session->set_userdata($data_session);
				redirect('admin');
 			}else{
				$data_session = array(
					'nama' => $user,
					'lvl_akses' => 2, //2 = user
					'status' => "login",
					'login' => true,
					'id_pegawai' => $cekuserpass->row()->id_pegawai, 
					);	 
				$this->session->set_userdata($data_session);
				//$cekuserpass = $this->Mpegawai->cek_pegawai_by_userpasss($user,$password);
				if($cekuserpass == TRUE OR ($user == 'user' AND $password == 'user'))
				{
					redirect('user');
				}/*else{
					redirect('');
				}*/
 			}
		}else{
			redirect(base_url("welcome"));
		}
	}
 
	 function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
