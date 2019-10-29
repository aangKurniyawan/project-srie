<?php
 defined('BASEPATH') OR exit ('No direct script acces allowed');
 class Member_c extends CI_Controller{
 	public function index(){
 		$this->load->view('home_member');
 	}
 } 
?>