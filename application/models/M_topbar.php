<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_topbar extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_pemberitahuan(){
        $this->db->where('level','admin');
        $this->db->order_by('waktu','DESC');
        return $this->db->get('tabel_pemberitahuan')->result_array();
    }
}
?>