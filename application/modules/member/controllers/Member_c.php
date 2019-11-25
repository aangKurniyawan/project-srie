<?php
	defined('BASEPATH') OR exit ('No direct script acces allowed');
	class Member_c extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model("member/Member_m");
		}
	 	public function index(){
	 		$data['profile'] = $this->Member_m->getProfile();
	 		$this->load->view('home_member',$data);
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

	 	public function lihat_status(){
	 		$id_transaksi = $this->input->post("id_transaksi");

	 		$data['detail'] = $this->Member_m->cekStatus($id_transaksi);
	 		$data['profile'] = $this->Member_m->getProfile();
	 		$this->load->view('menu/detailTransaksiMember',$data);
	 	}
	} 
?>