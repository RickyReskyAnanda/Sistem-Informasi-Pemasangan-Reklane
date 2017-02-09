<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_user extends MY_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_user');
    }

	public function index(){
		$data['data'] = $this->M_user->select_data_user();
		$this->load_view('V_user',$data);
	}
	public function view_detail_user(){
		$data['data']=$this->M_user->select_data_edit_user();
		$this->load_view('V_detail_user',$data);
	}
	public function view_tambah_user(){
		$this->load_view('V_tambah_user');
	}
	public function view_edit_user(){
		$data['data']=$this->M_user->select_data_edit_user();
		$this->load_view('V_edit_user',$data);
	}
		public function insert_data_user(){
			$this->M_user->insert_data_user();
		}
		public function update_data_user(){
			$this->M_user->update_data_user();
		}
		public function delete_data_user(){
			$this->M_user->delete_data_user();
		}
	
}
