<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function cek_login(){
        $pass =md5($this->input->post('katakunci'));
        $email= $this->input->post('email');

        $this->db->where('email',$email);
        $this->db->where('password',$pass);
        $data=$this->db->get('tabel_user');

        if ($data->num_rows() > 0) {
            
            $row = $data->row_array();
            if($row['blokir']=='tidak'){

                $newdata = array(
                    'nama'      => $row['nama'],
                    'foto'      => $row['foto'],
                    'email'     => $row['email'],//email
                    'id'        => $row['id'],
                    'status'    => $row['status'],
                    'logged_in' => "78jhk39",
                );
                $this->session->set_userdata($newdata);
                redirect('user/beranda/');
            } else{
                $this->session->set_flashdata('pesanlog', 'Email atau Password salah !');
                redirect('user/login');
            }
        }else{
            $this->session->set_flashdata('pesanlog', 'Email atau Password salah !');
            redirect('user/login');   
        }
    }
}
?>