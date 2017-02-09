<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_homepage extends CI_Controller {

	
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/sidebar');
		$this->load->view('v_homepage');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	public function pelayanan_reklame()
	{
		$this->load->view('template/head');
		$this->load->view('template/sidebar');
		$this->load->view('v_pelayanan_reklame');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	public function pendaftaran_reklame(){
		$this->load->view('template/head');
		$this->load->view('template/sidebar');
		$this->load->view('v_pendaftaran_reklame');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	public function tentang_kami(){
		$this->load->view('template/head');
		$this->load->view('template/sidebar');
		$this->load->view('tentang_kami/tentang_kami');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	public function panduan(){
		{
		$this->load->view('template/head');
		$this->load->view('template/sidebar');
		$this->load->view('v_panduan');
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	}
}
