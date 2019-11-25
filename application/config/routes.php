<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] 	= 'member/member_c';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= TRUE;


/* ROUTE MENU */
	$route['home']			= "member/member_c/index";
	$route['service'] 		= "member/member_c/service_menu";
	$route['kontak']		= "member/member_c/kontak_menu";
	$route['daftarMember']  = "member/member_c/daftar_member";
/* ROUTE MENU */

/* ROUTE OPERATOR */
	$route['operator'] 				 	= "operator/operator_c/index";
	$route['dataTransaksi'] 		 	= "operator/operator_c/menu_data_transaksi";
	$route['profileOperator'] 		 	= "operator/operator_c/menu_profile";
	$route['detailTransaksi/:any']   	= "operator/operator_c/detail_transaksiOperator";
	$route['update_transaksiOperator'] 	= "operator/operator_c/update_transaksiOperator";
/* ROUTE OPERATOR */

/* ROUTE PENGELOLA */
	$route['pengelola']     		= "pengelola/pengelola_c/index";
	$route['menuUser']      		= "pengelola/pengelola_c/menu_user";
	$route['menuService']   		= "pengelola/pengelola_c/menu_service"; 
	$route['menuTransaksi'] 		= "pengelola/pengelola_c/menu_transaksi";
	$route['menuProfile']   		= "pengelola/pengelola_c/menu_profile_outlet";
	$route['profilePengelola/:any'] = "pengelola/pengelola_c/menu_profile_pengelola";
	$route['addUser'] 				= "pengelola/pengelola_c/tambahUser";
	$route['editUser/:any'] 		= "pengelola/pengelola_c/formEdit/";
	$route['edit'] 					= "pengelola/pengelola_c/editUser/";
	$route['hapusAkun/:any'] 		= "pengelola/pengelola_c/hapusUser/";
	$route['addJenisCuci'] 			= "pengelola/pengelola_c/tambahJenisCuci";
	$route['editJenis'] 			= "pengelola/pengelola_c/editJenisCuci/";
	$route['addProfileLaundry'] 	= "pengelola/pengelola_c/tambahProfilelaundry";
	$route['editProfileLaundry']	= "pengelola/pengelola_c/editProfileLaundry";
	$route['transaksi']				= "pengelola/pengelola_c/tambah_transaksi";
	$route['detail/:any'] 			= "pengelola/pengelola_c/detail_transaksi";
	$route['updateTransaksi'] 		= "pengelola/pengelola_c/update_transaksi";
/* ROUTE PENGELOLA */

/* ROUTE MEMBER */
	$route['lihat'] 				= "member/member_c/lihat_status";
/* ROUTE MEMBER */

/* ROUTE LOGIN */
	$route['login'] 				= "login/login_c/action_login/";
	$route['logout']				= "login/login_c/logout/";
/* ROUTE LOGIN */