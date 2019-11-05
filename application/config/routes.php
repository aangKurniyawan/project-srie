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
	$route['operator'] 		= "operator/operator_c/index";
	$route['dataTransaksi'] = "operator/operator_c/menu_data_transaksi";
/* ROUTE OPERATOR */