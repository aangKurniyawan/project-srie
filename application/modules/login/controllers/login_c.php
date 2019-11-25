<?php
	defined('BASEPATH') OR exit("No direct access allowed");
	class Login_c extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model("login/Login_m");
			$this->load->model("member/Member_m");
			$this->load->model('pengelola/Pengelola_m');
			$this->load->model('pengelola/Jenis_cuci_m');
			$this->load->model('pengelola/Profile_laundry_m');
		}

		public function action_login(){
			$email = $this->input->post("email");
			$password = $this->input->post("password");

			$where = array(
					"email" => $email,
					"password" => $password
				);
			$cek =  $this->Login_m->cek_login("tb_user",$where)->num_rows();
			if($cek > 0){
				$cekUser = $this->Login_m->cek_user($where);
				$id_user 	= $cekUser[0]['id_user'];
				$nama_user 	= $cekUser[0]['nama_user'];
				$email 		= $cekUser[0]['email'];
				$level 		= $cekUser[0]['level'];
				$foto 		= $cekUser[0]['foto'];
				//print_r($level);die;
				$data_session = array(
						"id_user" 	=> $id_user,
						"nama_user" => $nama_user,
						"email" 	=> $email,
						"level" 	=> $level,
						"foto"		=> $foto,
						"status" 	=> "login"
					);
				if($level == 'Member'){
					$this->session->set_userdata($data_session);
					$data['profile'] = $this->Member_m->getProfile();
	 				$this->load->view('member/menu/home',$data);
				}else if($level == 'Operator'){
					$this->session->set_userdata($data_session);
					$data['disimpan'] 	= $this->Pengelola_m->jumlahTransaksiHariIni();
					$data['proses'] 	= $this->Pengelola_m->jumlahTransaksiProses();
					$data['selesai'] 	= $this->Pengelola_m->jumlahTransaksiSelesai();
					$data['batal'] 		= $this->Pengelola_m->jumlahTransaksiBatal();
					$data['jenis'] 		= $this->Jenis_cuci_m->getAllJenisCuci();
					$data['transaksi'] 	= $this->Pengelola_m->getTransaksi();
					$this->load->view('operator/home_operator',$data);
				}else if($level == 'Pengelola'){
					$this->session->set_userdata($data_session);
					$this->load->view('Pengelola/home_pengelola');
				}
				
			}else{
				$data['profile'] = $this->Member_m->getProfile();
	 			$this->load->view('home_member',$data);
			}
		}		

		public function logout(){
			$this->session->sess_destroy();
			$data['profile'] = $this->Member_m->getProfile();
			$this->load->view('member/home_member',$data);
		}
	}
?>