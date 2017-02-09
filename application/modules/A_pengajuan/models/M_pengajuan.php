<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengajuan extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_pengajuan($kondisi){
        $this->db->join('tabel_user', 'tabel_user.id = tabel_reklame.id_user');
        $this->db->where('status_user','terkirim');
        $this->db->where('status_reklame',$kondisi);
        return $this->db->get('tabel_reklame')->result_array();
    }
    public function select_data_detail_pengajuan(){
        $this->db->join('tabel_user', 'tabel_user.id = tabel_reklame.id_user');
        $this->db->where('id_reklame',$this->uri->segment(4));
        return $this->db->get('tabel_reklame')->row_array();
    }
    public function select_data_gambar_reklame(){
        $this->db->where('id_reklame',$this->uri->segment(4));
        return $this->db->get('tabel_dena_lokasi')->result_array();
    }

    public function update_status_reklame(){

        $status = $this->input->post('btn');
        $id = $this->input->post('id');
        $isi = $this->input->post('informasi');

        $data['status_reklame'] = $status;
        $this->db->where('id_reklame',$id);
        $this->db->update('tabel_reklame',$data);

        $this->db->where('id_reklame',$id);
        $hasil = $this->db->get('tabel_reklame')->row_array();

        $this->db->where('id_reklame',$id);
        $this->db->delete('tabel_pemberitahuan');
        
        $pesan="";
        if($status=='ditolak'){
            $pesan = "Maaf, Berkas Anda tidak diterima !";
        }elseif($status=='diterima'){
            $pesan = "Pengajuan berkas Anda telah diterima !. Silahkan melakukan kepengurusan selanjutnya dikantor.";
        }elseif($status=='belum-lengkap'){
            $pesan = "Silahkan Lengkapi Berkas Terlebih Dahulu.";
        }

        $val['id_reklame']      = $id;
        $val['id_user']         = $hasil['id_user'];
        $val['isi_pemberitahuan']=$pesan;
        $val['isi']             = $isi;
        $val['is_read']         = 0;
        $val['waktu']           = date('Y-m-d h:i:s');
        $val['level']           = 'user';

        $this->db->insert('tabel_pemberitahuan',$val);

        redirect('admin/persetujuan/'.$status);
    }
    

}
?>