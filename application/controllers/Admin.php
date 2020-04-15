<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function __construct()
        {
            parent::__construct();

            //$this->load->model('Mlogin');
            $this->load->model('m_login');
/*            $this->load->model('Muser');
            $this->load->model('Munit');
            $this->load->model('Mpegawai');
*/        
            $this->load->model('M_master');
        }

	function index()
	{
		if($this->session->userdata('login') == TRUE){

			$data['css'] = 'master/css/beranda';
			$data['js'] = 'master/js/beranda';
			$data['content'] = 'admin/beranda';
			$data['aktif2'] = $data['aktif3'] = $data['aktif4'] = '';
			$data['aktif1'] = 'class="active"';
			$data['on_off'] = $this->Minfo->cek_status_user_ipp();
			$this->load->view('admin_page',$data);
		}else{
			redirect(base_url());
		}
	}

	function opd()
	{
		if($this->session->userdata('login') == TRUE){
			//$data['content'] = 'admin/daftar_opd';
			$data['content'] = 'admin/daftar_opd2';
			$data['aktif1'] = $data['aktif3'] = $data['aktif4'] = '';
			$data['aktif2'] = 'class="active"';
			$this->load->view('admin_page_tooltip_popover',$data);
		}else{
			redirect(base_url());
		}
	}

	function pegawai($id)
	{
		if($this->session->userdata('login')==TRUE){
			$data['id_opd'] = $id;
			$data['content'] = 'unit/daftar_pegawai';
			$data['aktif1'] = $data['aktif3'] = $data['aktif4'] = '';
			$data['aktif2'] = 'class="active"';
			$this->load->view('admin_page',$data);
		}else{
			redirect(base_url());
		}
	}

	function form($id_pegawai)
	{
		if($this->session->userdata('login')==TRUE){
			$data['id_opd'] = $this->session->userdata('id_opd');
			$data['pegawai'] = $this->Mpegawai->get_pegawai_by_id($id_pegawai);
			$data['content'] = 'unit/profile';
			//$data['content'] = 'unit/profile_2';
			$data['aktif1'] = $data['aktif3'] = $data['aktif4'] = '';
			$data['aktif2'] = 'class="active"';
			$status_ipp = $this->Minfo->cek_status_user_ipp();
			if($status_ipp == 'closed')
			{
				$data['dis'] = 'disabled';
			}else{
				$data['dis'] = '';
			}

			$this->load->view('admin_page',$data);
		}else{
			redirect(base_url());
		}
	}

	function edit_form($id_pegawai)
	{
		if($this->session->userdata('login')==TRUE){
			$data['id_opd'] = $this->session->userdata('id_opd');
			$data['pegawai'] = $this->Mpegawai->get_pegawai_by_id($id_pegawai);
			$data['content'] = 'unit/edit_profile';
			//$data['content'] = 'unit/profile_2';
			if($this->session->flashdata('pesan')){
				$data['pesan'] = $this->session->flashdata('pesan');
			}else{
				$data['pesan'] = '';
			}
			$data['aktif1'] = $data['aktif3'] = $data['aktif4'] = '';
			$data['aktif2'] = 'class="active"';
			$this->load->view('admin_page',$data);
		}else{
			redirect(base_url());
		}
	}

	function passchange()
	{
		if($this->session->userdata('login')==TRUE){
			$data['content'] = 'admin/ubah_password';
			$data['aktif1'] = $data['aktif2'] = $data['aktif4'] = '';
			$data['aktif3'] = 'class="active"';
			$this->load->view('admin_page',$data);
		}else{
			redirect(base_url());
		}
	}

	function rekap()
	{
		if($this->session->userdata('login') == TRUE){

			$data['content'] = 'admin/rekap';
			$data['aktif2'] = $data['aktif3'] = $data['aktif1'] = '';
			$data['aktif4'] = 'class="active"';
			$data['pegawai'] = $this->Mpegawai->show();
			$this->load->view('admin_page_rekap',$data);
		}else{
			redirect(base_url());
		}
	}

	function daftarkan($id_opd)
	{
		//cek user
		$q = $this->Muser->cek_user_by_id_opd($id_opd);
		if($q == FALSE)
		{
			$opd = $this->Munit->get_opd_by_id_opd($id_opd);
			$opdx = explode('.', $opd->row()->Kode_Unit_Kerja);
			$user = implode('', $opdx);
			$a = array(
				'id_opd' => $id_opd,
				'user' => $user,
				'pass' => 'admin'.$user,
				'otoritas' => 2
			);
			$this->Muser->tambah_user($a);

		}else{
			$u = array(
				'id_opd' => $id_opd,
				
				'user' => $this->input->post('ubahuser'),
				'pass' => $this->input->post('ubahpass'),
				
			);			
			$this->Muser->ubah_user($u,$id_opd);
		}
		redirect ('admin/opd');
	}

	function editkode($id_opd)
	{
		
			$u = array(
				'id_opd' => $id_opd,
				'Kode_Unit_Kerja' => $this->input->post('editkode'),
			);			
			$this->Munit->ubah_unit_by_id_opd($u,$id_opd);
		
		redirect ('admin/opd');
	}

	function pass_exchange()
	{
		$u = array(
			'user' => $this->input->post('user'), 
			'pass' => $this->input->post('pass'), 
		);
		$this->Muser->ubah_user($u,1000);
		redirect('admin/passchange');
	}

	function test_done($on_off)
	{
		$this->Minfo->update_status_user($on_off);
		redirect('Admin');
	}

	function set_on_off($on_off)
	{
		if($on_off == 'closed')
		{
			$a = array(
				'status_user' => 'open'
			);
			$pesan = '<span class="label bg-light-green">Aplikasi sudah dibuka.</span>';
		}else{
			$a = array(
				'status_user' => 'closed'
			);
			$pesan = '<span class="label bg-pink">Aplikasi sudah ditutup.</span>';
		}
		$this->Minfo->update_status_user($a);
		$this->session->set_flashdata('pesan',$pesan);
		redirect ('admin');
	}

	function rekap_ipp_xls()
	{
		$d['nama_file'] = 'Rekap IPP';
		$d['pegawai'] = $this->Mpegawai->show();
		$this->load->view('cetak_excel_ipp_all',$d);
	}

	function mutasi($id_opd)
	{
		if($this->session->userdata('login')==TRUE){
			$data['id_opd'] = $id_opd;
			$data['content'] = 'unit/pegawai_mutasi';
			$data['aktif1'] = $data['aktif3'] = $data['aktif4'] = '';
			$data['aktif2'] = 'class="active"';
			$this->load->view('admin_page_search',$data);
		}else{
			redirect(base_url());
		}
	}

	function mutasikan($id_opd)
	{
		$pegawai = $this->input->post('pegawai');
		$opd2 = $this->input->post('opd');
		$namapeg = $this->Mpegawai->get_pegawai_by_id($pegawai)->row()->Nama_Pegawai;
		$namaopd = $this->Munit->get_opd_by_id_opd($opd2)->row()->Nama_Unit_Kerja;
		$this->session->set_userdata('id_opd',$id_opd);

		$this->form_validation->set_rules('pegawai','Pegawai','required|is_natural_no_zero');
		$this->form_validation->set_rules('opd','OPD','required|is_natural_no_zero');

		if($this->form_validation->run() == TRUE)
		{

		$this->session->set_flashdata('pesan','Pegawai a.n. <span class="label bg-lime">'.$namapeg.'</span> sudah dimutasikan ke OPD: <span class="label bg-lime">'.$namaopd.'</span>. <a href="#"  aria-hidden="true" data-dismiss="alert" aria-label="Close" class="btn btn-default btn-xs">OK</a> <a href="'.base_url('admin/mutasi_batal/'.$pegawai.'/'.$opd2).'" onclick="return confirm("Anda yakin akan membatalkan mutasi?")" class="btn btn-danger btn-xs">Batal</a>');
		$i = array(
			'id_opd' => $opd2
		);
		$this->Mpegawai->edit_pegawai($i,$pegawai);
		}else{
		$this->session->set_flashdata('pesan','Data pegawai atau OPD masih kosong. ');
		}
		redirect('admin/mutasi/'.$id_opd);
	}

	function mutasi_batal($id_pegawai,$id_opd)
	{
		$namapeg = $this->Mpegawai->get_pegawai_by_id($id_pegawai)->row()->Nama_Pegawai;
		$namaopd = $this->Munit->get_opd_by_id_opd($id_opd)->row()->Nama_Unit_Kerja;

		$i = array(
			'id_opd' => $this->session->userdata('id_opd')
		);
		$this->Mpegawai->edit_pegawai($i,$id_pegawai);

		$this->session->set_flashdata('pesan','Pegawai a.n. <span class="label bg-lime">'.$namapeg.'</span> BATAL MUTASI ke OPD: <span class="label bg-lime">'.$namaopd.'</span>. <a href="#"  aria-hidden="true" data-dismiss="alert" aria-label="Close" class="btn btn-default btn-xs">OK</a>');
		redirect('admin/mutasi/'.$this->session->userdata('id_opd'));
	}
}
