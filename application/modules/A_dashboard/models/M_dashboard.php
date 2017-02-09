<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_pemberitahuan(){
        $this->db->join('tabel_user', 'tabel_user.id = tabel_pemberitahuan.id_user');
        $this->db->join('tabel_reklame', 'tabel_reklame.id_reklame = tabel_pemberitahuan.id_reklame');
        $this->db->where('tabel_pemberitahuan.level','admin');
        $this->db->order_by('tabel_pemberitahuan.waktu','DESC');
        return $this->db->get('tabel_pemberitahuan')->result_array();
    }
}
?>