<?php
	defined('BASEPATH') OR exit ('No direct script acces allowed');
	class Member_c extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model("member/Member_m");
			$this->load->model('pengelola/Jenis_cuci_m');
			$this->load->model('pengelola/Pengelola_m');
		}
	 	public function index(){
	 		$data['profile'] = $this->Member_m->getProfile();
	 		$data['feedback'] = $this->Pengelola_m->getDataFeedback();
	 		$this->load->view('home_member',$data);
	 	}
	 	public function service_menu(){
	 		$data['profile'] = $this->Member_m->getProfile();
	 		$this->load->view('menu/serviceMenu',$data);
	 	}
	 	public function daftar_member(){
	 		$data['profile'] = $this->Member_m->getProfile();
	 		$this->load->view('menu/daftarMember',$data);
	 	}
	 	public function kontak_menu(){
	 		$data['profile'] = $this->Member_m->getProfile();
	 		$this->load->view('menu/kontak',$data);
	 	}

	 	public function lihat_status(){
	 		$id_transaksi = $this->input->post("id_transaksi");

	 		$data['detail'] = $this->Member_m->cekStatus($id_transaksi);
	 		$data['profile'] = $this->Member_m->getProfile();
	 		$this->load->view('menu/detailTransaksiMember',$data);
	 	}

	 	public function editProfileMember($id_user=null){
	 		$id_user 	= $this->input->post("id_user");
	 		$nama_user 	= $this->input->post("nama_user");
	 		$email 		= $this->input->post("email");
	 		$no_telepon = $this->input->post("no_telepon");
	 		$gender 	= $this->input->post("gender");
	 		$alamat 	= $this->input->post("alamat");

	 		$update = array(
	 				"nama_user" 	=> $nama_user,
	 				"email" 		=> $email,
	 				"no_telepon" 	=> $no_telepon,
	 				"gender" 		=> $gender,
	 				"alamat" 		=> $alamat
	 			);
	 		$where = array(
	 				"id_user" => $id_user
	 			);

			$this->Member_m->updateProfile($where,$update);
			$data['profileMember'] = $this->Member_m->getProfileMember($id_user);
			$data['profile'] = $this->Member_m->getProfile();
			
			// $data['user'] = $user->getByIdUser($id_user);
			// if(!$data["user"]) show_404();

			$this->load->view("member/menu/home",$data);
	 	}

	 	public function dataTransaksiMember(){
	 		$id_member = $this->uri->segment(2);

	 		$data["transaksi"] =$this->Member_m->getDataTransaksiMember($id_member);
	 		$data['profileMember'] = $this->Member_m->getProfileMember($id_member);
			$data['profile'] = $this->Member_m->getProfile();
	 		$this->load->view("member/menu/dataTransaksiMember",$data);
	 	}

	 	public function feedbackMember(){
			$data['profile'] = $this->Member_m->getProfile();
	 		$this->load->view("member/menu/feedbackMember",$data);
	 	}

	 	public function addFeedback(){
	 		$now = date('Y-m-d H:i:s');
	 		$id_member 	= $this->input->post("id_member");
	 		$nama_user 	= $this->input->post("nama_user");
	 		$no_telepon = $this->input->post("no_telepon");
	 		$email 		= $this->input->post("email");
	 		$subject 	= $this->input->post("subject");
	 		$message 	= $this->input->post("message");

	 		$insert = array(
	 			"id_member" => $id_member,
	 			"subject" 	=> $subject,
	 			"message" 	=> $message,
	 			"status"	=> "terkirim",
	 			"created" 	=> $now,
	 			"deleted" 	=> 0
	 		);

	 		$data = $this->Member_m->insertFeedback($insert);
	 		$data['profile'] = $this->Member_m->getProfile();
	 		$this->session->set_flashdata('terkirim','Feedback Anda Sudah Terkirim');
	 		$this->load->view("member/menu/feedbackMember",$data);
	 	}

	 	public function menuPesanOnline(){
	 		$id_member 				= $this->uri->segment(2);
	 		$data['jenis'] 			= $this->Jenis_cuci_m->getAllJenisCuci();
	 		$data['profile'] 		= $this->Member_m->getProfile();
	 		$data['profileMember'] 	= $this->Member_m->getProfileMember($id_member);
	 		$this->load->view("member/menu/pesan_online",$data);
	 	}

	 	public function tambahPesanOnline(){
	 		$now = date('Y-m-d H:i:s');

	 		$id_member 		= $this->input->post("id_member");
	 		$id_jenis  		= $this->input->post("id_jenis");
	 		$jumlah_cucian  = $this->input->post("jumlah_cucian");

	 		$transaksi = array(
	 			"id_member" 	=> $id_member,
	 			"id_jenis" 		=> $id_jenis,
	 			"jumlah_cucian" => $jumlah_cucian,
	 			"total_harga"	=> 0,
	 			"status_bayar"  => "Belum Lunas",
	 			"status_cucian" => "Terkirim",
	 			"created" 		=> $now,
	 			"deleted" 		=> 0
	 		);
	 		$insert = $this->Pengelola_m->addTransaksi($transaksi);
	 		$data["transaksi"] = $this->Member_m->getDataTransaksiMember($id_member);
	 		$data['profile'] 		= $this->Member_m->getProfile();
	 		$data['profileMember'] 	= $this->Member_m->getProfileMember($id_member);
	 		$this->load->view("member/menu/dataTransaksiMember",$data);
	 	}
	} 
?>