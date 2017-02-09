<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	
	public function load_view($page,$data=array(),$topbar=array()){
		$this->load->model('M_topbar');

		$topbar['data'] = $this->M_topbar->select_data_pemberitahuan();
        $this->load->view('template2/head');
        $this->load->view('template2/topbar',$topbar);
        $this->load->view('template2/sidebar');
        $this->load->view($page,$data);
        $this->load->view('template2/js');
        $this->load->view('template2/foot');
	}	

}
