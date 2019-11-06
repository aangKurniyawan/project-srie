<?php
	defined('BASEPATH') OR exit('No direct acces allowed');
	class Pengelola_c extends CI_Controller{
		public function index(){
			$this->load->view('Pengelola/home_pengelola');
		}
	}
?>