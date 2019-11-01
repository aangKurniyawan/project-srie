<?php
	defined('BASEPATH') OR exit ('No direct script acces allowed');
	class Operator_c extends CI_Controller{
		public function index(){
			$this->load->view('home_operator');
		}
	}
?>