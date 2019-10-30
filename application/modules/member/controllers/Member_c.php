<?php
	defined('BASEPATH') OR exit ('No direct script acces allowed');
	class Member_c extends CI_Controller{
	 	public function index(){
	 		$this->load->view('home_member');
	 	}
	 	public function service_menu(){
	 		$this->load->view('menu/serviceMenu');
	 	}
	 	public function daftar_member(){
	 		$this->load->view('menu/daftarMember');
	 	}
	 	public function kontak_menu(){
	 		$this->load->view('menu/kontak');
	 	}
	} 
?>