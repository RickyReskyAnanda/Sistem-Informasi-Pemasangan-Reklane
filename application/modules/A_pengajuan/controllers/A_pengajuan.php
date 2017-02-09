<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_pengajuan extends MY_Controller {

	public function __construct(){
        parent::__construct();
        // $logged_in = $this->session->userdata('logged_in');
        // if($logged_in == "78jhk39") {
            $this->load->model('M_pengajuan');
        // }
        // else {
        //     $this->session->set_flashdata('pesanlog', 'Silahkan Log In kembali !');
        //     redirect('user/login');
        // }
    }
    
	public function index(){
		$data['data'] = $this->M_pengajuan->select_data_pengajuan('menunggu');
		$this->load_view('V_pengajuan',$data);
	}
	public function view_detail_pengajuan(){
		$data['data'] = $this->M_pengajuan->select_data_detail_pengajuan();
		$data['dena'] = $this->M_pengajuan->select_data_gambar_reklame();
		$this->load_view('V_detail_pengajuan',$data);
	}

	public function view_persetujuan(){
		$data['data']=$this->M_pengajuan->select_data_pengajuan($this->uri->segment(3));
		$this->load_view('V_persetujuan',$data);
	}
	public function update_status_reklame(){
		$this->M_pengajuan->update_status_reklame();
	}
	
}
