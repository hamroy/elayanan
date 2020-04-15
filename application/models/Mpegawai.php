<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpegawai extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            // Your own constructor code
        }

    function show()
    {
    	return $this->db->get('pegawai'); 
    }

    function cek_pegawai_by_userpasss($user,$pass)
    {
        $this->db2 = $this->load->database('db2', TRUE);
        $this->db2->where('NIP',$user);
        //$this->db2->where('NIP',$pass);
        return $this->db2->get('pegawai');
        /*if($c->num_rows()>0)
        {
            return TRUE;
        }else{
            return FALSE;
        }*/
    }

    function get_pegawai_by_id($id)
    {
        $this->db2 = $this->load->database('db2', TRUE);

        $this->db2->where('id_pegawai',$id);
        return $this->db2->get('pegawai');
    }

    function get_pegawai_by_id_opd($id_opd)
    {
        $this->db->where('id_opd',$id_opd);
        return $this->db->get('pegawai');
    }

    function get_json_pegawai_by_id_opd($id_opd)
    {
        $arr = $this->get_pegawai_by_id_opd($id_opd)->result_array();
        echo json_encode($arr);
    }

    function get_nilai_by_id($id)
    {
        $this->db->where('id_pegawai',$id);
        return $this->db->get('nilai');
    }

    function tambah_pegawai($i)
    {
        $this->db->insert('pegawai',$i);
    }

    function edit_pegawai($i,$id)
    {
        $this->db->where('id_pegawai',$id);
        $this->db->update('pegawai',$i);
    }

    function input_nilai($i)
    {
        $this->db->insert('nilai',$i);
    }

    function inputulang_nilai($n,$id_pegawai)
    {
        $this->db->where('id_pegawai',$id_pegawai);
        $this->db->update('nilai',$n);
    }

    function cek_nilai($id)
    {
        $q = $this->get_nilai_by_id($id);
        if($q->num_rows()>0)
        {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function jumlah_pegawai_sudah_isi_ipp_per_opd($id_opd)
    {
        $db2 = $this->load->database('db2', TRUE);

        $db2->from('pegawai, nilai');
        $db2->where('pegawai.id_pegawai = nilai.id_pegawai');
        $db2->where('id_opd',$id_opd);
        $db2->where('Status_Aktif','Aktif');
        return $db2->get()->num_rows();
    }

    function cek_pegawai_aktif_by_id_pegawai($id_pegawai)
    {
        $this->db->where('id_pegawai',$id_pegawai);
        $this->db->where('Status_Aktif','Aktif');
        $q = $this->db->get('pegawai');
        if($q->num_rows()>0)
        {
            return TRUE; // pegawai aktif
        }else{
            return FALSE;//pegawai non aktif
        }
    }

    function show_nilai_pegawai_per_opd($id_opd)
    {
        $this->db->from('opd,  pegawai');
        $this->db->where('opd.id_opd = pegawai.id_opd');
        $this->db->where('opd.id_opd',$id_opd);
        $this->db->order_by('Nama_Pegawai');
        return $this->db->get();
    }

    function get_nilai_ipp_by_id_pegawai($id_pegawai)
    {
        $this->db->from('pegawai,nilai');
        $this->db->where('pegawai.id_pegawai = nilai.id_pegawai');
        $this->db->where('pegawai.id_pegawai',$id_pegawai);
        $q = $this->db->get();
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $key ) {
                $total = $key->nilai_kualifikasi + $key->nilai_kompetensi1 + $key->nilai_kompetensi2 + $key->nilai_kompetensi3 + $key->nilai_kompetensi4 + $key->nilai_kinerja + $key->nilai_kompetensi1 + $key->nilai_disiplin1 + $key->nilai_disiplin2;
                $totalipp = $total * 100;
            }
            return $totalipp.'%';
        }else{
            return 0;
        }
    }

    function get_nilai_kualifikasi_by_id_pegawai($id_pegawai)
    {
        $this->db->from('pegawai,nilai');
        $this->db->where('pegawai.id_pegawai = nilai.id_pegawai');
        $this->db->where('pegawai.id_pegawai',$id_pegawai);
        $q = $this->db->get();
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $key ) {
                $total = $key->nilai_kualifikasi;
                $totalipp = $total * 100;
            }
            return $totalipp.'%';
        }else{
            return 0;
        }
    }    

    function get_nilai_kompetensi_by_id_pegawai($id_pegawai)
    {
        $this->db->from('pegawai,nilai');
        $this->db->where('pegawai.id_pegawai = nilai.id_pegawai');
        $this->db->where('pegawai.id_pegawai',$id_pegawai);
        $q = $this->db->get();
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $key ) {
                $total = $key->nilai_kompetensi1 + $key->nilai_kompetensi2 + $key->nilai_kompetensi3 + $key->nilai_kompetensi4;
                $totalipp = $total * 100;
            }
            return $totalipp.'%';
        }else{
            return 0;
        }
    }    

    function get_nilai_kinerja_by_id_pegawai($id_pegawai)
    {
        $this->db->from('pegawai,nilai');
        $this->db->where('pegawai.id_pegawai = nilai.id_pegawai');
        $this->db->where('pegawai.id_pegawai',$id_pegawai);
        $q = $this->db->get();
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $key ) {
                $total = $key->nilai_kinerja;
                $totalipp = $total * 100;
            }
            return $totalipp.'%';
        }else{
            return 0;
        }
    }    

    function get_nilai_disiplin_by_id_pegawai($id_pegawai)
    {
        $this->db->from('pegawai,nilai');
        $this->db->where('pegawai.id_pegawai = nilai.id_pegawai');
        $this->db->where('pegawai.id_pegawai',$id_pegawai);
        $q = $this->db->get();
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $key ) {
                $total = $key->nilai_disiplin1 + $key->nilai_disiplin2;
                $totalipp = $total * 100;
            }
            return $totalipp.'%';
        }else{
            return 0;
        }
    }    

}
