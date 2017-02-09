<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_user(){
        $this->db->where('level',$this->uri->segment(3));
        return $this->db->get('tabel_user')->result_array();
    }
    public function select_data_edit_user(){
        $id = $this->uri->segment(4);
        $this->db->where('id',$id);
        return $this->db->get('tabel_user')->row_array();
    }
    public function insert_data_user(){
        $data['nama']       = $this->input->post('nama');
        $data['email']      = $this->input->post('email');
        $data['password']   = md5('admin');
        $data['foto']       ='default.png';
        $data['jk']         = $this->input->post('jk');
        $data['alamat']     = $this->input->post('alamat');
        $data['no_hp']      = $this->input->post('no_hp');
        $data['status']     = 'lengkap';
        $data['blokir']     = 'tidak';
        $data['pekerjaan']  = $this->input->post('pekerjaan');
        $data['foto_ktp']   = 'default.png';
        $data['level']      = 'admin';

        $this->db->insert('tabel_user',$data);
        redirect('admin/user/admin');
    }
    public function update_data_user(){
        $data['nama']       = $this->input->post('nama');
        $data['email']      = $this->input->post('email');
        $data['jk']         = $this->input->post('jk');
        $data['alamat']     = $this->input->post('alamat');
        $data['no_hp']      = $this->input->post('no_hp');
        $data['blokir']     = $this->input->post('blokir');
        $data['pekerjaan']  = $this->input->post('pekerjaan');

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('tabel_user',$data);
        redirect('admin/user/admin');
    }
    public function delete_data_user(){
        $id = $this->uri->segment(4);
        $this->db->where('id',$id);
        $this->db->delete('tabel_user');
        redirect('admin/user/admin');
    }
    

}
?>