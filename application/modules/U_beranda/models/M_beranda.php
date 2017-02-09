<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_pemberitahuan(){
        $this->db->join('tabel_user', 'tabel_user.id = tabel_pemberitahuan.id_user');
        $this->db->join('tabel_reklame', 'tabel_reklame.id_reklame = tabel_pemberitahuan.id_reklame');
        $this->db->where('tabel_pemberitahuan.id_user',$this->session->userdata('id'));
        $this->db->where('tabel_pemberitahuan.is_read',0);
    	$this->db->order_by('waktu','DESC');
        return $this->db->get('tabel_pemberitahuan')->result_array();
    }
    public function select_data_pemberitahuan_detail(){
    	$id=$this->uri->segment(4);

    	$data['is_read']=1;
    	$this->db->where('id_pemberitahuan',$id);
    	$this->db->update('tabel_pemberitahuan',$data);

    	$this->db->where('id_pemberitahuan',$id);
        $this->db->join('tabel_reklame', 'tabel_reklame.id_reklame = tabel_pemberitahuan.id_reklame');
    	return $this->db->get('tabel_pemberitahuan')->row_array();
    }
}
?>