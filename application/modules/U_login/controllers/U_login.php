<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_login extends MY_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_daftar');
        $this->load->model('M_login');

    }
    //pendaftaran
    public function coba(){
    	if($this->session->flashdata('pesanlog')!=''){
			echo $this->session->flashdata('pesanlog');
		}
	}
    public function index(){
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39") {
            redirect('user/beranda/');
        }
        else {
            $this->load->view('template/head');
			$this->load->view('template/sidebar');
			$this->load->view('v_login');
			$this->load->view('template/js');
			$this->load->view('template/foot');
        }
    }
    public function view_profil(){
        $data['data']=$this->M_daftar->select_data_user();
        $this->load->view('template/head');
        $this->load->view('V_edit_profil',$data);
        $this->load->view('template/js');
        $this->load->view('template/foot');
    }

		public function insert_daftar_user_step1(){
			$this->M_daftar->insert_daftar_user_step1();
		}
        public function update_data_profil(){
            $this->M_daftar->update_data_profil();
        }

	//-----login------

    //proses login
    public function cek_login(){
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in == "78jhk39"){
            redirect('user/beranda/');
        }else{
            $this->M_login->cek_login();
        }
    }

    public function keluar() {
        $newdata = array('nama','xyz','abc','foto','status');
        $this->session->unset_userdata($newdata);
        $this->session->unset_userdata('logged_in');

        redirect('user/login');
    }
}
