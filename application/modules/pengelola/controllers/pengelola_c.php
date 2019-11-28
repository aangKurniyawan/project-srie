<?php
	defined('BASEPATH') OR exit('No direct acces allowed');
	class Pengelola_c extends CI_Controller{

		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('status') != "login"){
				redirect(base_url("login"));
			}
			$this->load->model('pengelola/Pengelola_m');
			$this->load->model('pengelola/Jenis_cuci_m');
			$this->load->model('pengelola/Profile_laundry_m');
			$this->load->library('form_validation');
		}
		public function index(){
			$data['bulananDisimpan'] 	= $this->Pengelola_m->getTransaksiBulananDisimpan();
			$data['bulananProses'] 		= $this->Pengelola_m->getTransaksiBulananDiproses();
			$data['bulananSelesai'] 	= $this->Pengelola_m->getTransaksiBulananSelesai();
			$data['bulananBatal'] 		= $this->Pengelola_m->getTransaksiBulananBatal();
			$data['transaksi'] 			= $this->Pengelola_m->getTransaksi();
			$this->load->view('Pengelola/home_pengelola',$data);
		}

		public function menu_user(){
			$data['user'] = $this->Pengelola_m->getAllUser();
			$this->load->view('Pengelola/menu/menu_user',$data);
		}

		public function menu_service(){
			$data['jenis'] = $this->Jenis_cuci_m->getAllJenisCuci();
			$this->load->view('Pengelola/menu/menu_jenis_cuci',$data);
		}

		public function menu_transaksi(){
			$data['disimpan'] 	= $this->Pengelola_m->jumlahTransaksiHariIni();
			$data['proses'] 	= $this->Pengelola_m->jumlahTransaksiProses();
			$data['selesai'] 	= $this->Pengelola_m->jumlahTransaksiSelesai();
			$data['batal'] 		= $this->Pengelola_m->jumlahTransaksiBatal();
			$data['jenis'] 		= $this->Jenis_cuci_m->getAllJenisCuci();
			$data['transaksi'] 	= $this->Pengelola_m->getTransaksi();
			$this->load->view('Pengelola/menu/data_transaksi',$data);
		}

		public function menu_profile_outlet(){
			$data['laundry'] = $this->Profile_laundry_m->getAllProfileLaundry();
			$this->load->view('Pengelola/menu/profile_outlet',$data);
		}

		public function menu_profile_pengelola(){
			$id_member = $this->uri->segment(2);
			//print_r($id_member);die;
			$user = $this->Pengelola_m;
			$data['user'] = $user->getByIdUser($id_member);
			$this->load->view('Pengelola/menu/profile_user',$data);
		}

		public function tambahUser(){
			$data = array(
					$no_telepon = $this->input->post('no_telepon'),
					$email = $this->input->post('email')
				);
			$user = $this->Pengelola_m;
			$validation = $this->form_validation;
			$validation->set_rules($user->rules());

			$cekData = $this->Pengelola_m->cekRow($data);
			if($cekData == 1){
				$this->session->set_flashdata('duplicat','No Telepon atau Email Sudar Terdaftar');
			}else{
				if($validation->run()){
				$user->saveUser();
				$this->session->set_flashdata('success','Berhasil disimpan');
			}else{
				$this->session->set_flashdata('gagal','gagal disimpan');
				}
			}
			$data['user'] = $this->Pengelola_m->getAllUser();
			$this->load->view('Pengelola/menu/menu_user',$data);
		}

		public function formEdit($id_member = null){
			$id_member = $this->uri->segment(2);
			
			if(!isset($id_member)) redirect('pengelola/Pengelola_c/menu_user');

			$user = $this->Pengelola_m;
			$validation = $this->form_validation;
			$validation->set_rules($user->rules());

			if($validation->run()){
				$user->updateUser();
				$this->session->set_flashdata('update','Berhasil disimpan');
			}

			$data['user'] = $user->getByIdUser($id_member);
			if(!$data["user"]) show_404();

			$this->load->view("Pengelola/menu/profile_user",$data);
		}

		public function editUser($id_user = null){
			
			$id_user = $this->uri->segment(2);
			$id_user = $this->input->post('id_user');
			//print_r($id_member);die;
			if(!isset($id_user)) redirect('pengelola/Pengelola_c/menu_user');

			$user = $this->Pengelola_m;
			$validation = $this->form_validation;
			$validation->set_rules($user->rules());

			if($validation->run()){
				$user->updateUser();
				$this->session->set_flashdata('update','Berhasil disimpan');
			}

			$data['user'] = $user->getByIdUser($id_user);
			if(!$data["user"]) show_404();

			$this->load->view("Pengelola/menu/profile_user",$data);
		}

		public function hapusUser($id_member = null){
			$id_member = $this->uri->segment(2);
			if(!isset($id_member)) show_404();
			if($this->Pengelola_m->deleteUser($id_member)){
				$this->session->set_flashdata('delete','Berhasil dihapus');
				redirect(site_url('pengelola/Pengelola_c/menu_user'));
			}
		}

		public function tambahJenisCuci(){
			
			$jenis = $this->Jenis_cuci_m;
			//print_r($jenis);die;
			$validation = $this->form_validation;
			$validation->set_rules($jenis->rules_jenis_cuci());
			
			if($validation->run()){
				$jenis->saveJenisCuci();
				$this->session->set_flashdata('cuci','Berhasil disimpan');
			}else{
				$this->session->set_flashdata('gagal','gagal disimpan');
			}

			$data['jenis'] = $this->Jenis_cuci_m->getAllJenisCuci();
			$this->load->view('Pengelola/menu/menu_jenis_cuci',$data);
		}

		public function editJenisCuci(){
			$id_jenis_cuci = $this->input->post("id_jenis_cuci");
			// print_r($id_jenis_cuci);die;
			if(!isset($id_jenis_cuci)) redirect('pengelola/Pengelola_c/menu_jenis_cuci');

			$jenis = $this->Jenis_cuci_m;
			$validation = $this->form_validation;
			$validation->set_rules($jenis->rules_jenis_cuci());

			if($validation->run()){
				$jenis->updateJenisCuci();
				$this->session->set_flashdata('berhasilCuci','Berhasil disimpan');
			}else{
				$this->session->set_flashdata('gagalCuci','Gagagl disimpan');
			}

			$data['jenis'] = $this->Jenis_cuci_m->getAllJenisCuci();
			$this->load->view('Pengelola/menu/menu_jenis_cuci',$data);
		}

		public function tambahProfilelaundry(){

			$laundry = $this->Profile_laundry_m;
			$validation = $this->form_validation;
			$validation->set_rules($laundry->rules());

			if($validation->run()){
				$laundry->saveProfileLaundry();
				$this->session->set_flashdata('successLaundry','Berhasil disimpan');
			}else{
				$this->session->set_flashdata('gagalLaundry','gagal disimpan');
			}

			$data['laundry'] = $this->Profile_laundry_m->getAllProfileLaundry();
			$this->load->view('Pengelola/menu/profile_outlet',$data);
		}

		public function editProfileLaundry(){
			$id_outlet = $this->input->post("id_outlet");
			//print_r($id_outlet);die;
			//if(!isset($id_outlet)) redirect('pengelola/Pengelola_c/menu_jenis_cuci');

			$outlet = $this->Profile_laundry_m;
			$validation = $this->form_validation;
			$validation->set_rules($outlet->rules());

			if($validation->run()){
				$outlet->updateProfileOutlet();
				$this->session->set_flashdata('editProfile','Berhasil disimpan');
			}else{
				$this->session->set_flashdata('gagaleditProfile','Gagagl disimpan');
			}

			$data['laundry'] = $this->Profile_laundry_m->getAllProfileLaundry();
			$this->load->view('Pengelola/menu/profile_outlet',$data);
		}

		public function tambah_transaksi(){
			$now = date('Y-m-d H:i:s');

			$id_member 		= $this->input->post('id_member');
			$id_jenis		= $this->input->post('id_jenis');
			$nama_member 	= $this->input->post('nama_member');
			$no_telepon		= $this->input->post('no_telepon');
			$alamat 		= $this->input->post('alamat');
			$berat_cuci 	= $this->input->post('berat_cuci');
			$jumlah_cucian 	= $this->input->post('jumlah_cucian');
			$id_operator	= $this->input->post('id_operator');

			
			
			$harga = $this->Jenis_cuci_m->cek_harga($id_jenis);
			$total_harga = $berat_cuci*$harga[0]['harga'];

			$transaksi = array(
				'id_member' 	=> $id_member,
				'id_jenis'		=> $id_jenis,
				'berat_cuci'	=> $berat_cuci,
				'jumlah_cucian' => $jumlah_cucian,
				'total_harga' 	=> $total_harga,
				'status_bayar'	=> 'Belum Lunas',
				'status_cucian' => 'Disimpan',
				'created'		=> $now,
				'id_operator' 	=> $id_operator,
				'deleted'		=> 0
					
				);

			//print_r($transaksi);die;$cekDuplicat[0]['id_operator'],$cekDuplicat[0]['status_bayar'],$cekDuplicat[0]['jumlah_cucian'],$cekDuplicat[0]['id_member'],$cekDuplicat[0]['id_jenis'],$cekDuplicat[0]['berat_cuci']
			$cekDuplicat = $this->Pengelola_m->cekLastData($id_member);
			//print_r($cekDuplicat);die;
			if($cekDuplicat[0]['id_member']     == $transaksi['id_member']     && 
			   $cekDuplicat[0]['id_jenis']      == $transaksi['id_jenis']      && 
			   $cekDuplicat[0]['berat_cuci']    == $transaksi['berat_cuci']    &&
			   $cekDuplicat[0]['jumlah_cucian'] == $transaksi['jumlah_cucian'] &&
			   $cekDuplicat[0]['id_operator']   == $transaksi['id_operator']){
				echo " <script type=text/javascript>alert('Selesaikan Transaksi Terlebih Dahulu');</script>";
			}else{

			$insert = $this->Pengelola_m->addTransaksi($transaksi);
			//$cek = $this->Pengelola_m->cekTransaksi($id_member);
			//print_r($id_member);die;
			}
			
			$data['transaksi'] = $this->Pengelola_m->detailTransaksiAfterAdd($cekDuplicat[0]['id_member']);
			$data['sumBayar']  = $this->Pengelola_m->getSumBayar($cekDuplicat[0]['id_transaksi']);
			$data['userLimit'] = $this->Pengelola_m->userTransaksiLimit($cekDuplicat[0]['id_transaksi']);
			$data['status']	   = $this->Pengelola_m->userTransaksiLimit($cekDuplicat[0]['id_transaksi']);	
			$this->load->view('menu/detail_transaksi',$data);
			//$this->output->delete_cache();
			//print_r($transaksi);die;
		}

		public function update_transaksi(){
			$buttonBayar = null;
			$buttonSelesai = null;
			if(isset($_POST['bayar'])){
				$buttonBayar = "bayar";
				//print_r($butoonBayar);die;
			}else if(isset($_POST['selesai'])){
				$buttonSelesai = "selesai";
			}else if(isset($_POST['batal'])){
				$buttonBatal = "batal";
			}
				$id_transaksi 		= $this->input->post("id_transaksi");
				$jumlah_pembayaran 	= $this->input->post("jumlah_pembayaran");
				$sisa_bayar			= $this->input->post("sisa_bayar");
				$status_bayar 		= $this->input->post("status_bayar");
				$status_cucian 		= $this->input->post("status_cucian");


			//print_r($jumlah_pembayaran);die;
			
			//print_r($status_cucian);die;
			if($sisa_bayar == 0 || $sisa_bayar <=0){
				$status_bayar = "Lunas";
			}
			//print_r($jumlah_pembayaran);die;
			$updateStatus = array(
					"id_transaksi" 		=> $id_transaksi,
					"jumlah_pembayaran" => $jumlah_pembayaran,
					"sisa_bayar" 		=> $sisa_bayar,
					"status_bayar" 		=> $status_bayar,
					"status_cucian" 	=> "Dalam Pengerjaan"
				);
			if($buttonBayar == "bayar" ){
				if($jumlah_pembayaran == " "){
					$this->session->set_flashdata('belumBayar','Silahkan Selesaikan Pembayaran');
				}else if($status_cucian == "Transaksi Batal"){
					$this->session->set_flashdata('bayar','Transaksi  Sudah Dibatalkan Silahkan Buat Transaksi Baru');
				}else{
					$update = $this->Pengelola_m->update_status_transaksi($updateStatus);
				}
				
			}else if($buttonSelesai == "selesai"){
				if($status_cucian == "Transaksi Batal" && $jumlah_pembayaran == " "){
					$this->session->set_flashdata('selesai','Transaksi Sudah Dibatalkan Silahkan Buat Transaksi Baru');
				}else if($jumlah_pembayaran == " "){
					$this->session->set_flashdata('belumBayar','Silahkan Selesaikan Pembayaran Terlebih Dahulu');
				}else{
					$updateSelesai = array(
					"id_transaksi" 		=> $id_transaksi,
					"status_cucian" 	=> "Selesai Pengerjaan"
				);
				//print_r($updateSelesai);die;
				$update = $this->Pengelola_m->update_statusSelesai($updateSelesai);
				}
				
			}else if($buttonBatal == "batal"){
				if($status_cucian == "Selesai Pengerjaan" && $status_bayar == "Lunas" && $status_cucian == "Dalam Pengerjaan"){
					$this->session->set_flashdata('tidakUpdate','Transaksi Yang Sudah Lunas dan Selesai Tidak Bisa Dirubah');
				}else{
					$updateBatal = array(
						"id_transaksi" 		=> $id_transaksi,
						"status_cucian" 	=> "Transaksi Batal"
					);
					$update = $this->Pengelola_m->update_statusBatal($updateBatal);
				}
			}
			$data['sumBayar']  = $this->Pengelola_m->getSumBayar($id_transaksi);
			$data['userLimit'] = $this->Pengelola_m->userTransaksiLimit($id_transaksi);
			$data['transaksi'] = $this->Pengelola_m->detailTransaksi($id_transaksi);
			$data['status']	   = $this->Pengelola_m->userTransaksiLimit($id_transaksi);	
			$this->load->view('menu/detail_transaksi',$data);
		}

		public function getDataMember(){
			if(isset($_GET['term'])){
				$result = $this->Pengelola_m->GetRowMember($_GET['term']);
				if(count($result) > 0){
					foreach($result as $row)
					$arr_result[] = $row->no_telepon;
					echo json_encode($arr_result);
				}
			}
		}

		public function getDetailMember(){

			$no_telepon = $_GET['no_telepon'];
			//$no_telepon = $this->input->post('no_telepon');
			//print_r($no_telepon);die;
			$data = $this->Pengelola_m->dataMember($no_telepon);
			echo json_encode($data);
			//print_r($no_telepon);die;
		}

		public function detail_transaksi($id_transaksi = null){
			$id_transaksi = $this->uri->segment(2);
			//print_r($id_transaksi);die;
			$data['sumBayar']  = $this->Pengelola_m->getSumBayar($id_transaksi);
			$data['userLimit'] = $this->Pengelola_m->userTransaksiLimit($id_transaksi);
			$data['transaksi'] = $this->Pengelola_m->detailTransaksi($id_transaksi);
			$data['status']	   = $this->Pengelola_m->userTransaksiLimit($id_transaksi);	
			$this->load->view('menu/detail_transaksi',$data);
		}
		public function updateTransaksi(){
			//$id_transaksi = $this->input->post("id_transaksi");
			$jumlah_pembayaran = $this->input->post("jumlah_pembayaran");
			//print_r($jumlah_pembayaran);die;
		}

		public function DataFeedback(){
			$data['feedback'] = $this->Pengelola_m->getDataFeedback();
			$this->load->view("menu/data_feedback",$data);
		}

		public function editFeedback(){
			$id_feedback = $this->input->post("id_feedback");
			$subject 	 = $this->input->post("subject");
			$message 	 = $this->input->post("message");
			$status 	 = $this->input->post("status");

			$insert = array(
				"subject" => $subject,
				"message" => $message,
				"status"  => $status
			);
			$where = array(
				"id_feedback" => $id_feedback
			);
			$this->Pengelola_m->updateFeedback($insert,$where);
			$data['feedback'] = $this->Pengelola_m->getDataFeedback();
			$this->load->view("menu/data_feedback",$data);
		}

		public function dataPesanOnline(){
			$data['online'] = $this->Pengelola_m->getDataPesanOnline();
			$data['jenis']  = $this->Jenis_cuci_m->getAllJenisCuci();
			$this->load->view("menu/data_pesanan_online",$data);
		}

		public function editPesananOline(){
			$id_transaksi 	= $this->input->post("id_transaksi");
			$id_member 		= $this->input->post("id_member");
			$id_operator 	= $this->input->post("id_operator");
			$id_jenis 		= $this->input->post("id_jenis");
			$berat_cuci 	= $this->input->post("berat_cuci");
			$harga 			= $this->Jenis_cuci_m->cek_harga($id_jenis);
			$total_harga 	= $berat_cuci*$harga[0]['harga'];

			$update = array(
				"id_member" 	=> $id_member,
				"id_jenis" 		=> $id_jenis,
				"id_operator" 	=> $id_operator,
				"berat_cuci" 	=> $berat_cuci,
				"total_harga" 	=> $total_harga,
				"status_bayar"  => "Belum Lunas",
				"status_cucian" => "Disimpan"
			);
			//print_r($update);die;
			$where = array(
				"id_transaksi" => $id_transaksi
			);
			$this->Pengelola_m->updateTransaksiOnline($update,$where);
			$data['transaksi'] = $this->Pengelola_m->detailTransaksiAfterAdd($id_member);
			$data['sumBayar']  = $this->Pengelola_m->getSumBayar($id_transaksi);
			$data['userLimit'] = $this->Pengelola_m->userTransaksiLimit($id_transaksi);
			$data['status']	   = $this->Pengelola_m->userTransaksiLimit($id_transaksi);	
			$this->load->view('menu/detail_transaksi',$data);
		}
	}
?>