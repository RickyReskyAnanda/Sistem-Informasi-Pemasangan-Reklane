<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemberitahuan extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_pemberitahuan($kondisi){
        $this->db->join('tabel_user', 'tabel_user.id = tabel_reklame.id_user');
        $this->db->where('status_user','terkirim');
        $this->db->where('status_reklame',$kondisi);
        return $this->db->get('tabel_reklame')->result_array();
    }
    public function select_data_detail_pemberitahuan(){
        $this->db->join('tabel_user', 'tabel_user.id = tabel_reklame.id_user');
        $this->db->where('id_reklame',$this->uri->segment(4));
        return $this->db->get('tabel_reklame')->row_array();
    }

    public function update_status_reklame(){
        $status = $this->uri->segment(4);
        $id     = $this->uri->segment(5);

        $data['status_reklame'] = $status;
        $this->db->where('id_reklame',$id);
        $this->db->update('tabel_reklame',$data);
        redirect('admin/persetujuan'.$status);
    }
    

}
?>