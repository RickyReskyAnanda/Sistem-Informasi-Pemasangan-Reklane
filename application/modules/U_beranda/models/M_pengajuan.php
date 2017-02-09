<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengajuan extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_pengajuan(){
    	$this->db->select('*');
        $this->db->from('tabel_reklame');
        $this->db->join('tabel_user', 'tabel_user.id = tabel_reklame.id_user');
        $this->db->where('id_user',$this->session->userdata('abc'));
        return $this->db->get()->result_array();
    }
    public function select_data_user(){
        $this->db->where('id',$this->session->userdata('id'));
        return $this->db->get('tabel_user')->row_array();
    }

    public function insert_data_pengajuan(){
        if($_FILES['gbrreklame']['name']){
            $nmfile = "reklame_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'gambar/reklame'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '7000'; //lebar maksimum 1288 px
            $config['max_height']       = '7000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('gbrreklame');
            $gbr   = $this->upload->data();
            $gbrreklame = $gbr['file_name'];
            
            $this->load->library('image_lib');

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '800';
            $config['height']           = '800';
            $config['quality']          = '100';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
        }else{
            $gbrreklame='default.jpg';
        }
        //---batas upload gambar reklame--

        //---- proses upload foto lokasi ---
        $datafile['denalokasi']=$_FILES['denalokasi'];
        $name_array = array();
        if($_FILES['denalokasi']['size'][0] > 0){
            //---- proses mengupload foto----
            $count = count($_FILES['denalokasi']['size']);
            $batasloop=0;
            $this->load->library('image_lib');

            foreach($datafile as $key=>$value){ // proses meng-upload foto
                for($s=0; $s<$count; $s++) {
                    if($batasloop<$count){
                        $_FILES['denalokasi']['name']     = $value['name'][$s];
                        $_FILES['denalokasi']['type']     = $value['type'][$s];
                        $_FILES['denalokasi']['tmp_name'] = $value['tmp_name'][$s];
                        $_FILES['denalokasi']['error']    = $value['error'][$s];
                        $_FILES['denalokasi']['size']     = $value['size'][$s];
                        $config1['file_name']            = 'lokasi_'.date('Ymdhis');
                        $config1['upload_path']          = 'gambar/lokasi';
                        $config1['allowed_types']        = 'gif|jpg|png';
                        $config1['max_size']             = '10000';
                        $config1['max_width']            = '7000';
                        $config1['max_height']           = '7000';
                        $this->load->library('upload', $config1);
                        $this->upload->initialize($config1);
                        $this->upload->do_upload('denalokasi');
                        $data = $this->upload->data();
                        $name_array[]=$data['file_name'];
                        $batasloop++;

                        $config1['create_thumb']     = false;
                        $config1['image_library']    = 'gd2';
                        $config1['source_image']     = $this->upload->upload_path.$this->upload->file_name;
                        $config1['maintain_ratio']   = true;
                        $config1['width']            = '600';
                        $config1['height']           = '600';
                        $config1['quality']          = '100';
                        $this->image_lib->initialize($config1);
                        $this->image_lib->resize();
                    }
                }
            }
        }
        
        //---- batas upload foto lokasi ---

        //--- input data reklame ke tabel ---
        $data=array();
        $data['status_user']    = 'terkirim';
        $data['id_user']        = $this->session->userdata('id');
        $data['nama_reklame']   = $this->input->post('nama_reklame');
        $data['jenis']          = $this->input->post('jenis');
        $data['isi']            = $this->input->post('isi');
        $data['lokasi']         = $this->input->post('lokasi');
        $data['keterangan']     = $this->input->post('keterangan');
        $data['gambar_reklame'] = $gbrreklame;
        $data['status_reklame'] = 'menunggu';
        $data['tanggal']        = date('Y-m-d');

        $this->db->insert('tabel_reklame',$data);

        //--- mengambil data reklame terbaru ---
        $this->db->where('id_user',$this->session->userdata('id'));
        $this->db->limit(1);
        $this->db->order_by('id_reklame','DESC');
        $hasil = $this->db->get('tabel_reklame')->row_array();
        

        //--- menginput gambar dena lokasi di tabel ---
        for ($i=0; $i < count($name_array) ; $i++) { 
            $val['id_reklame'] = $hasil['id_reklame'];
            $val['nama_gambar'] = $name_array[$i];
            $this->db->insert('tabel_dena_lokasi',$val);
        }

        //---- menginput pemberitahuan ke tabel----
        $pemberitahuan['id_user']           = $this->session->userdata('id');
        $pemberitahuan['id_reklame']        = $hasil['id_reklame'];
        $pemberitahuan['isi_pemberitahuan'] = "Pengajuan Berkas Baru !";
        $pemberitahuan['isi']               = "-";
        $pemberitahuan['is_read']           = 0;
        $pemberitahuan['level']             = 'admin';

        $this->db->insert('tabel_pemberitahuan',$pemberitahuan);
        redirect('user/beranda/daftar-pengajuan');
    }
}
?>