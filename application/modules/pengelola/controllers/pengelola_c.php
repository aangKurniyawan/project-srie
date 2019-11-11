<?php
	defined('BASEPATH') OR exit('No direct acces allowed');
	class Pengelola_c extends CI_Controller{
		public function index(){
			$this->load->view('Pengelola/home_pengelola');
		}

		public function menu_user(){
			$this->load->view('Pengelola/menu/menu_user');
		}

		public function menu_service(){
			$this->load->view('Pengelola/menu/menu_jenis_cuci');
		}

		public function menu_transaksi(){
			$this->load->view('Pengelola/menu/data_transaksi');
		}

		public function menu_profile_outlet(){
			$this->load->view('Pengelola/menu/profile_outlet');
		}

		public function menu_profile_pengelola(){
			$this->load->view('Pengelola/menu/profile_pengelola');
		}
	}
?>