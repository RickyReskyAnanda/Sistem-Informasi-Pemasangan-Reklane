<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function cek_login(){
        $asd=md5($this->input->post('kuncinya'));
        $eml= $this->input->post('email');

        $this->db->where('email',$eml);
        $this->db->where('password',$asd);
        $this->db->where('level','admin');
        $data=$this->db->get('tabel_user');

        if ($data->num_rows() > 0) {
            
            $row = $data->row_array();
            if($row['email']==$eml && $row['blokir']=='tidak'){

                $newdata = array(
                    'nama'=> $row['nama'],
                    'foto'=> $row['foto'],
                    'xyz' => $row['email'],
                    'abc' => $row['id'],
                    'logged_in' => "78jhk39admin",
                );
                $this->session->set_userdata($newdata);
                redirect('admin/dashboard');
            } else{
                $this->session->set_flashdata('a_pesan', 'Email atau Password salah !');
                redirect('admin/login');
            }
        }else{
            $this->session->set_flashdata('a_pesan', 'Email atau Password salah !');
            redirect('admin/login');   
        }
    }
}
?>