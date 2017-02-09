<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_reklame extends MY_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_reklame');
    }

	public function view_data_reklame(){
		$data['data']=$this->M_reklame->select_data_reklame();
		$this->load->view('V_reklame',$data);
	}
	public function view_data_update(){
		$data['data'] = $this->M_reklame->select_data_update();
		$this->load->view('V_edit_reklame');
	}
		public function update_data_reklame(){
			$this->M_reklame->update_data_reklame();
		}
		public function delete_data_reklame(){
			$this->M_reklame->delete_data_reklame();
		}
}
