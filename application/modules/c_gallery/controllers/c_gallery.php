<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_gallery extends CI_Controller {

	
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/sidebar');
		$this->load->view('v_gallery');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	
}
