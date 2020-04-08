<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minfo extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    function show()
    {
    	return $this->db->get('tbl_info'); 
    }

    function aplikasi_ipp()
    {
    	return $this->db->get('tbl_info'); 
    }

    function cek_status_user_ipp()
    {
    	return $this->aplikasi_ipp()->row()->status_user;
    }

    function update_status_user($on_off)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_info',$on_off);
    }
}
