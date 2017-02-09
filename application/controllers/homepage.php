<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/sidebar');
		$this->load->view('homepage');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	public function pelayanan_reklame()
	{
		$this->load->view('template/head');
		$this->load->view('template/sidebar');
		$this->load->view('pelayanan_reklame');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
}
