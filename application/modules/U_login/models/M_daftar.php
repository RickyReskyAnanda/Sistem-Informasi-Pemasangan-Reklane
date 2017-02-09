<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_daftar extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_user(){
        $this->db->where('id',$this->session->userdata('id'));
        return $this->db->get('tabel_user')->row_array();
    }
    public function insert_daftar_user_step1(){
        $data['email']      = $this->input->post('email');
        $data['password']   = md5($this->input->post('password'));
        $data['nama']       = $this->input->post('nama');
        $data['foto']       = 'default.png';
        $data['jk']         = 'laki-laki';
        $data['alamat']     = 'default';
        $data['no_hp']      = '000000';
        $data['status']     = 'belum';
        $data['foto_ktp']   = 'default.png';
        $data['blokir']     = 'tidak';
        $data['level']      = 'user';

        $this->db->where('email',$data['email']);
        $email = $this->db->get('tabel_user')->num_rows();

        if($email>0){
            $this->session->set_flashdata('usernasconf', 'email sudah digunakan !');
            redirect('user/login');
        }else{
            $this->db->where('email',$data['email']);
            $email = $this->db->get('tabel_user')->num_rows();

            if($email>0){
                $this->session->set_flashdata('emailconf', 'Email sudah digunakan !');
                redirect('user/login');
            }else{
                if($data['password'] == md5($this->input->post('confirm'))){
                    $this->db->insert('tabel_user',$data);

                    $this->db->where('email',$data['email']);
                    $this->db->where('password',$data['password']);
                    $user_data = $this->db->get('tabel_user')->row_array();

                    $newdata = array(
                        'nama'      => $data['nama'],
                        'email'     => $data['email'],
                        'foto'      => $data['foto'],
                        'id'        => $user_data['id'], 
                        'level'     => 'user',
                        'logged_in' => "78jhk39",
                    );
                    $this->session->set_userdata($newdata);
                    redirect('user/beranda/profil');
                }else{
                    $this->session->set_flashdata('passconf', 'Password tidak sama !');
                    redirect('user/login');
                }
            }
        }
    }

    public function update_data_profil(){
        $logged_in = $this->session->userdata('logged_in_y');
        
        if($logged_in == "78jhk39") {
            if($_FILES['foto']['name']){
                $nmfile = "profil_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
                $config['file_name']        = $nmfile; //nama yang terupload nantinya
                $config['upload_path']      = 'gambar/profil'; //path folder
                $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config['max_size']         = '10000'; //maksimum besar file 2M
                $config['max_width']        = '7000'; //lebar maksimum 1288 px
                $config['max_height']       = '7000'; //tinggi maksimu 768 px

                $this->load->library('upload', $config);
                $this->upload->do_upload('userfile');
                $val   = $this->upload->data();
                $gambar = $val['file_name'];

                $this->load->library('image_lib');

                $config['create_thumb']     = false;
                $config['image_library']    = 'gd2';
                $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
                $config['maintain_ratio']   = true;
                $config['width']            = '100';
                $config['height']           = '100';
                $config['quality']          = '100';
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
            }

            $data['jk']         = $this->input->post('jk');        
            $data['alamat']     = $this->input->post('alamat');        
            $data['no_hp']      = $this->input->post('no_hp');    

            $this->db->where('id',$this->session->userdata('id'));
            $this->db->update('tabel_user');    
            redirect('user/dashboard');
        }else{
            redirect('user/login');
        }
    }

}
?>