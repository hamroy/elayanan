<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('login') != true){
			redirect(base_url("login"));
		}
	}
	
	public function index()
	{
		$this->load->view('Beranda');
	}
	
}