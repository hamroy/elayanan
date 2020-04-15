<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_login extends CI_Model {
    //mengecek ke database yang kita kirim ke parameter ke databasen
    public function cek_login($username,$password){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $this->db->where('pwd', $password);
        $result = $this->db->get('tbuser'); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;

        $data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
    }
}
