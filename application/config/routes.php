<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'c_homepage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// --- administrator ---
$route['admin/login'] 			= "A_login";
$route['admin/login/proses'] 	= "A_login/cek_login";
$route['admin/dashboard'] 		= "A_dashboard";
$route['admin/pengajuan'] 		= "A_pengajuan";
$route['admin/pengajuan'] 		= "A_pengajuan";
$route['admin/pengajuan/detail/:num'] 	= "A_pengajuan/view_detail_pengajuan";
$route['admin/persetujuan/:any'] 		= "A_pengajuan/view_persetujuan";
	$route['admin/pengajuan/update/data'] = "A_pengajuan/update_status_reklame";



$route['admin/setuju'] 	= "A_persetujuan/setuju";
$route['admin/tolak'] 	= "A_persetujuan/tolak";

$route['admin/user/:any'] 		= "A_user";
$route['admin/user/tambah/data'] = "A_user/view_tambah_user";
$route['admin/user/edit/:num'] = "A_user/view_edit_user";
$route['admin/user/detail/:num'] = "A_user/view_detail_user";
	$route['admin/user/insert/data'] = "A_user/insert_data_user";
	$route['admin/user/update/data'] = "A_user/update_data_user";
	$route['admin/user/hapus/:num'] = "A_user/delete_data_user";



//--pendaftaran dan login user --
$route['user/login'] 			= "U_login";
$route['user/login/masuk'] 		= "U_login/cek_login";
$route['registrasi/tahap1'] 	= "U_login/insert_daftar_user_step1";

//--akun user----
$route['user/beranda'] 					= "U_beranda";
$route['user/beranda/pemberitahuan/:num']= "U_beranda/pemberitahuan";
$route['user/beranda/profil'] 			= "U_login/view_profil";
$route['user/beranda/profil/edit'] 		= "U_login/update_data_profil";

$route['user/beranda/daftar-pengajuan'] = "U_beranda/daftar_pengajuan";
$route['user/beranda/pengajuan'] 		= "U_beranda/pengajuan";
$route['user/beranda/pengajuan/input/data']= "U_beranda/insert_data_pengajuan";
$route['user/beranda/keluar'] 			= "U_login/keluar";

