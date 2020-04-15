<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

        public function __construct()
        {
            parent::__construct();

            $this->load->model('Minfo');
            //$this->load->model('Muser');
            $this->load->model('Munit');
            $this->load->model('Mpegawai');
            //$this->load->model('GambarModel');
            //$this->load->model('Mpesan');
        }

	function index()
	{
		if($this->session->userdata('login') == TRUE){
			$data['id_pegawai'] = $this->session->userdata('id_pegawai');
			//$data['content'] = 'unit/beranda';
			$data['pegawai'] = $this->Mpegawai->get_pegawai_by_id($this->session->userdata('id_pegawai'));
			$data['content'] = 'unit/beranda';
			$data['aktif2'] = $data['aktif3'] = $data['aktif4'] = '';
			$data['aktif1'] = 'class="active"';
			$this->load->view('adminunit_page',$data);
		}else{
			redirect(base_url());
		}
	}

	function form($id_pegawai=null)
	{
		if($this->session->userdata('login') == TRUE){
			$data['id_pegawai'] = $this->session->userdata('id_pegawai');
			//$data['content'] = 'unit/beranda';
			//$data['pegawai'] = $this->Mpegawai->get_pegawai_by_id($id_pegawai);
			$data['content'] = 'unit/profile';
			$data['aktif1'] = $data['aktif3'] = $data['aktif4'] = '';
			$data['aktif2'] = 'class="active"';
			$this->load->view('adminunit_page',$data);
		}else{
			redirect(base_url());
		}
/*		if($this->session->userdata('login')==TRUE){
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
			$this->load->view('adminunit_page',$data);
		}else{
			redirect(base_url());
		}
*/	}

	function opd($id)
	{
		if($this->session->userdata('login')==TRUE){
			$data['id_opd'] = $id;
			$data['content'] = 'unit/daftar_pegawai';
			$data['aktif1'] = $data['aktif3'] = $data['aktif4'] = '';
			$data['aktif2'] = 'class="active"';
			$this->load->view('adminunit_page',$data);
		}else{
			redirect(base_url());
		}
	}

	function pass_change($id)
	{
		if($this->session->userdata('login')==TRUE){
			$data['id_opd'] = $id;
			$data['content'] = 'unit/ubah_password';
			$data['aktif1'] = $data['aktif2'] = $data['aktif4'] = '';
			$data['aktif3'] = 'class="active"';
			$this->load->view('adminunit_page',$data);
		}else{
			redirect(base_url());
		}
	}

	function kirim_pesan($id_opd)
	{
		if($this->session->userdata('login')==TRUE){
			$data['id_opd'] = $id_opd;
			$data['content'] = 'unit/kirim_pesan';
			$data['aktif1'] = $data['aktif2'] = $data['aktif3'] = '';
			$data['aktif4'] = 'class="active"';
			$data['cek_pesan'] = $this->Munit->cek_pesan_opd($id_opd);
			$this->load->view('adminunit_page_2',$data);
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
			$this->load->view('adminunit_page',$data);
		}else{
			redirect(base_url());
		}
	}

	function unggah_doc($id_pegawai)
	{
		if($this->session->userdata('login')==TRUE){
			$data['id_opd'] = $this->session->userdata('id_opd');
			$data['pegawai'] = $this->Mpegawai->get_pegawai_by_id($id_pegawai);
			$data['content'] = 'unit/upload_dokumen';
			//$data['content'] = 'unit/profile_2';
			if($this->session->flashdata('pesan')){
				$data['pesan'] = $this->session->flashdata('pesan');
			}else{
				$data['pesan'] = '';
			}
			$data['aktif1'] = $data['aktif3'] = $data['aktif4'] = '';
			$data['aktif2'] = 'class="active"';
			$this->load->view('adminunit_page',$data);
		}else{
			redirect(base_url());
		}
	}

	function kirimkan_pesan($id_opd)
	{
		date_default_timezone_set('Asia/Jakarta');
		$timezone = time() + (60 * 60 * 7);
		$a = array(
			'pesan' => $this->input->post('pesanopd'),
			'id_opd' => $id_opd,
			'input_date' => gmdate('d-m-Y H:i:s',$timezone),
			'status' => 1
		);
		$this->Munit->tambah_pesan($a);
		redirect('Adminunit/kirim_pesan/'.$id_opd);
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
				'otoritas' => 2
			);			
			$this->Muser->ubah_user($u,$id_opd);
		}
		redirect ('admin/opd');
	}

	function menilai($id_pegawai)
	{
		$n = array(
			'id_pegawai' => $id_pegawai,
			'nilai_kualifikasi' => $this->input->post('pendidikan'),
			'nilai_kompetensi1' => $this->input->post('kompetensi1'),
			'nilai_kompetensi2' => $this->input->post('kompetensi2'),
			'nilai_kompetensi3' => $this->input->post('kompetensi3'),
			'nilai_kompetensi4' => $this->input->post('kompetensi4'),
			'nilai_kinerja' => $this->input->post('kinerja'),
			'nilai_kinerja' => $this->input->post('kinerja'),
			'nilai_disiplin1' => $this->input->post('disiplin1'),
			'nilai_disiplin2' => $this->input->post('disiplin2'),
		);
		$this->Mpegawai->input_nilai($n);
		if($this->session->userdata('id_opd')==1000)
		{
		redirect('Admin/form/'.$id_pegawai);

		}else{

		redirect('Adminunit/form/'.$id_pegawai);
		}
	}

	function menilaiulang($id_pegawai)
	{
		$n = array(
			'id_pegawai' => $id_pegawai,
			'nilai_kualifikasi' => $this->input->post('pendidikan'),
			'nilai_kompetensi1' => $this->input->post('kompetensi1'),
			'nilai_kompetensi2' => $this->input->post('kompetensi2'),
			'nilai_kompetensi3' => $this->input->post('kompetensi3'),
			'nilai_kompetensi4' => $this->input->post('kompetensi4'),
			'nilai_kinerja' => $this->input->post('kinerja'),
			'nilai_kinerja' => $this->input->post('kinerja'),
			'nilai_disiplin1' => $this->input->post('disiplin1'),
			'nilai_disiplin2' => $this->input->post('disiplin2'),
		);
		$this->Mpegawai->inputulang_nilai($n,$id_pegawai);
		if($this->session->userdata('id_opd')==1000)
		{
		redirect('Admin/form/'.$id_pegawai);

		}else{

		redirect('Adminunit/form/'.$id_pegawai);
		}
	}

	function pass_exchange($id)
	{
		$u = array(
			'user' => $this->input->post('user'), 
			'pass' => $this->input->post('pass'), 
		);
		$this->Muser->ubah_user($u,$id);
		//$this->session->sess_destroy();
		$this->session->set_flashdata('pesan','Username atau Password Anda sudah berubah, silahkan login ulang');
		redirect(base_url());
	}

	function add_officer($id)
	{
		$a = array(
			'id_opd' => $id,
			'Nama_Pegawai' => $this->input->post('nama'),
			'NIP' => $this->input->post('nip'),
			'Tgl_Lahir' => $this->input->post('tgl_lahir'),
			'TMT_CPNS' => $this->input->post('tmt_cpns'),
			'TMT_PNS' => $this->input->post('tmt_pns'),
			'Pendidikan' => $this->input->post('pendidikan'),
			'Jenis_Kelamin' => $this->input->post('sex'),
			'Pangkat' => $this->input->post('pangkat'),
			'Jabatan' => $this->input->post('jabatan'),
			'Status_Aktif' => $this->input->post('status'),
			'ID_Finger' => $this->input->post('id_finger'),
		);
		$this->Mpegawai->tambah_pegawai($a);
		$this->session->set_flashdata('pesan','Data pegawai baru berhasil ditambahkan.');
		if($this->session->userdata('id_opd') == 1000){
			redirect('Admin/pegawai/'.$id);
		}else{
			redirect('Adminunit/opd/'.$id);
		}
	}

	function edit_officer($id)
	{
		if($this->input->post('nama'))
		{
			$nama = $this->input->post('nama');
			$nip = $this->input->post('nip');
		}else{
			$nama = $nip = '';
		}
		$a = array(

			'Nama_Pegawai' => $this->input->post('nama'),
			'NIP' => $this->input->post('nip'),
			'Tgl_Lahir' => $this->input->post('tgl_lahir'),
			'TMT_CPNS' => $this->input->post('tmt_cpns'),
			'TMT_PNS' => $this->input->post('tmt_pns'),
			'Pendidikan' => $this->input->post('pendidikan'),
			'Jenis_Kelamin' => $this->input->post('sex'),
			'Pangkat' => $this->input->post('pangkat'),
			'Jabatan' => $this->input->post('jabatan'),
			'Status_Aktif' => $this->input->post('status'),
			'ID_Finger' => $this->input->post('id_finger'),
		);
		$this->Mpegawai->edit_pegawai($a,$id);
		$this->session->set_flashdata('pesan','Data pegawai berhasil diubah.');
		if($this->session->userdata('id_opd')==1000){
		redirect('Admin/edit_form/'.$id);

		}else{

		redirect('Adminunit/edit_form/'.$id);
		}
	}

	public function upload($id_pegawai){
		$data = array();
		
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			$upload = $this->GambarModel->upload();
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				 // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
				$this->GambarModel->save($upload,$id_pegawai);
				
				redirect('Adminunit/form/'.$id_pegawai); // Redirect kembali ke halaman awal / halaman view data
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
				redirect('Adminunit/unggah_doc/'.$id_pegawai); // Redirect kembali ke halaman awal / halaman view data

		}
		
		//$this->load->view('Adminunit/unggah_doc/'.$id_pegawai, $data);

	}

	function cetak($id)
	{
		if($this->session->userdata('login')==TRUE){
			$data['id_opd'] = $id;
			$data['nama_file'] = 'laporan_ipp_'.$id;
			$data['query'] = $this->Mpegawai->show_nilai_pegawai_per_opd($id);
			$this->load->view('cetak_excel_ipp',$data);
		}else{
			redirect(base_url());
		}
	}

}
