<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'member/member_c';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;


/*
	ROUTE MENU
*/
	$route['home']		= "member/member_c/index";
	$route['service'] 	= "member/member_c/service_menu";

/*
	ROUTE MENU
*/