<?php
	defined('BASEPATH') OR exit ('No direct script acces allowed');
	class Operator_c extends CI_Controller{
		public function index(){
			$this->load->view('home_operator');
		}

		public function menu_data_transaksi(){
			$this->load->view('menu/data_transaksi');
		}

		public function menu_profile(){
			$this->load->view('menu/profile');
		}

		public function detail_transaksi(){
			$this->load->view('menu/detail_transaksi');
		}
	}
?>