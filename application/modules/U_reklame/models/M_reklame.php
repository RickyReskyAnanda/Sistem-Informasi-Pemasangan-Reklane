<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_reklame extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_update(){
        $id = $this->uri->segment(3);
        return $this->db->get('tabel_reklame')->row_array();
    }
    public function update_data_reklame(){
        $data['jenis'] = $this->input->post('jenis');
        $data['isi'] = $this->input->post('isi');
        $data['lokasi'] = $this->input->post('lokasi');
        $data['keterangan'] = $this->input->post('keterangan');

        $this->db->where('id_reklame',$this->input->post('id_reklame'));
        $this->db->update('tabel_reklame',$data);
        redirect('user/reklame');
    }
    public function delete_data_reklame(){
        $this->db->where('id_reklame',$this->uri->segment(3));
        $this->db->delete('tabel_reklame');
        redirect('user/reklame');
    }

}
?>