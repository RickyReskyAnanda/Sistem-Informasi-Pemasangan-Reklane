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
        $data['pekerjaan']  = '-';

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
                        'status'    => $data['status'],
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
                $this->load->library('image_lib');
        $data = array();
            if($_FILES['foto']['name']){
                $nmfile = "profil_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
                $config['file_name']        = $nmfile; //nama yang terupload nantinya
                $config['upload_path']      = 'gambar/profil'; //path folder
                $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config['max_size']         = '10000'; //maksimum besar file 2M
                $config['max_width']        = '7000'; //lebar maksimum 1288 px
                $config['max_height']       = '7000'; //tinggi maksimu 768 px

                $this->load->library('upload', $config);
                $this->upload->do_upload('foto');
                $val   = $this->upload->data();
                $data['foto'] = $val['file_name'];


                $config['create_thumb']     = false;
                $config['image_library']    = 'gd2';
                $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
                $config['maintain_ratio']   = true;
                $config['width']            = '200';
                $config['height']           = '200';
                $config['quality']          = '90';
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $gfoto=$this->input->post('foto_lama');
                if($gfoto!='default.png'){
                    unlink('gambar/profil/'.$gfoto);
                }
            }
            if($_FILES['foto_ktp']['name']){
                $nmfile = "ktp_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
                $config1['file_name']        = $nmfile; //nama yang terupload nantinya
                $config1['upload_path']      = 'gambar/ktp'; //path folder
                $config1['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config1['max_size']         = '10000'; //maksimum besar file 2M
                $config1['max_width']        = '7000'; //lebar maksimum 1288 px
                $config1['max_height']       = '7000'; //tinggi maksimu 768 px

                $this->load->library('upload', $config1);
                $this->upload->do_upload('foto_ktp');
                $val   = $this->upload->data();
                $data['foto_ktp'] = $val['file_name'];


                $config1['create_thumb']     = false;
                $config1['image_library']    = 'gd2';
                $config1['source_image']     = $this->upload->upload_path.$this->upload->file_name;
                $config1['maintain_ratio']   = true;
                $config1['width']            = '600';
                $config1['height']           = '600';
                $config1['quality']          = '90';
                $this->image_lib->initialize($config1);
                $this->image_lib->resize();

                $gfoto2=$this->input->post('foto_ktp_lama');
                if($gfoto2!='default.png'){
                    unlink('gambar/profil/'.$gfoto2);
                }
            }
            $data['email']      = $this->input->post('email');
            if($this->input->post('password')!=''){
                $data['password']   = md5($this->input->post('password'));
            }
            $data['nama']       = $this->input->post('nama');
            $data['jk']         = $this->input->post('jk');
            $data['alamat']     = $this->input->post('alamat');
            $data['no_hp']      = $this->input->post('no_hp');
            $data['status']     = 'lengkap';
            $data['pekerjaan']     = $this->input->post('pekerjaan');
            $this->db->where('id',$this->session->userdata('id'));
            $this->db->update('tabel_user',$data);    
            redirect('user/beranda');
    }

}
?>