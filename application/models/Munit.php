<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Munit extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            // Your own constructor code
        }

    function show()
    {
        $db2 = $this->load->database('db2', TRUE);

    	return $db2->get('opd'); 
    }

    function show_except_this_opd($id_opd)
    {
        $this->db->where('id_opd !=',$id_opd);
        return $this->db->get('opd'); 
    }

    function ubah_unit_by_id_opd($u,$id)
    {
        $this->db->where('id_opd',$id);
        $this->db->update('opd',$u);
    }

    function get_opd_by_id_opd($id_opd)
    {
        $db2 = $this->load->database('db2', TRUE);

		$db2->where('id_opd',$id_opd);
    	return $db2->get('opd');
    }

    function get_pegawai_by_id_opd($id_opd)
    {
        $db2 = $this->load->database('db2', TRUE);
		$db2->where('id_opd',$id_opd);
    	return $db2->get('pegawai');
    }

    function cek_pegawai_by_id_opd($id_opd)
    {
    	$q = $this->get_pegawai_by_id_opd($id_opd);
    	if($q->num_rows()>0)
    	{
    		return TRUE;
    	}else{
    		return FALSE;
    	}
    }

    function jumlah_pegawai_per_opd($id_opd)
    {
        

     return $this->get_pegawai_by_id_opd($id_opd)->num_rows();   
    }

    function jumlah_pegawai_aktif_per_opd($id_opd)
    {
        $this->db->where('Status_Aktif','Aktif');
     return $this->get_pegawai_by_id_opd($id_opd)->num_rows();   
    }

    function tambah_pesan($a)
    {
        $this->db->insert('pesan',$a);
    }

    function show_pesan_opd($id_opd)
    {
        $this->db->where('id_opd',$id_opd);
        $this->db->order_by('input_date','desc');
        return $this->db->get('pesan');
    }

    function cek_pesan_opd($id_opd)
    {
        $q = $this->show_pesan_opd($id_opd);
        if($q->num_rows()>0)
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }

}
