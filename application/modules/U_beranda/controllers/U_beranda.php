<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_beranda extends MY_Controller {

	public function __construct(){
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            $this->load->model('M_beranda');
			$this->load->model('M_pengajuan');
        }
        else {
            $this->session->set_flashdata('pesanlog', 'Silahkan Log In kembali !');
            redirect('user/login');
        }
    }
	
	public function index(){
		$data['data'] = $this->M_beranda->select_data_pemberitahuan();
		$this->load->view('template/head');
		$this->load->view('V_beranda',$data);
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	public function pemberitahuan(){
		$data['data'] = $this->M_beranda->select_data_pemberitahuan_detail();
		$this->load->view('template/head');
		$this->load->view('V_pemberitahuan',$data);
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	
	public function daftar_pengajuan(){

		$data['data'] = $this->M_pengajuan->select_data_pengajuan();
		$this->load->view('template/head');
		$this->load->view('V_daftar_pengajuan',$data);
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
	public function pengajuan(){
		$data['pemohon']=$this->M_pengajuan->select_data_user();
		$this->load->view('template/head');
		$this->load->view('V_pengajuan1',$data);
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
		public function insert_data_pengajuan(){
			$this->M_pengajuan->insert_data_pengajuan();
		}

}
