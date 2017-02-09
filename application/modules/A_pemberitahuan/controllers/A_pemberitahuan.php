<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_pemberitahuan extends MY_Controller {

	public function __construct(){
        parent::__construct();
        // $logged_in = $this->session->userdata('logged_in');
        // if($logged_in == "78jhk39") {
            $this->load->model('M_pemberitahuan');
        // }
        // else {
        //     $this->session->set_flashdata('pesanlog', 'Silahkan Log In kembali !');
        //     redirect('user/login');
        // }
    }
    
	public function index(){
		$data['data'] = $this->M_pemberitahuan->select_data_pemberitahuan('menunggu');
		$this->load_view('V_pemberitahuan',$data);
	}
	public function view_detail_pemberitahuan(){
		$data['data'] = $this->M_pemberitahuan->select_data_detail_pemberitahuan();
		$this->load_view('V_detail_pemberitahuan',$data);
	}

	public function view_persetujuan(){
		$data['data']=$this->M_pemberitahuan->select_data_pemberitahuan($this->uri->segment(3));
		$this->load_view('V_persetujuan',$data);
	}
	public function update_status_reklame(){
		$this->M_pemberitahuan->update_status_reklame();
	}
	
}
