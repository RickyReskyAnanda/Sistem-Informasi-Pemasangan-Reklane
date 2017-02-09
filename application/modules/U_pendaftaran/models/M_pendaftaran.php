<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftaran extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_user(){
        $this->db->where('id',$this->session->userdata('abc'));
        return $this->db->get('tabel_user')->row_array();
    }

}
?>