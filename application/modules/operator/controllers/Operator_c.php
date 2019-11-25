<?php
	defined('BASEPATH') OR exit ('No direct script acces allowed');
	class Operator_c extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->model('pengelola/Pengelola_m');
			$this->load->model('pengelola/Jenis_cuci_m');
			$this->load->model('pengelola/Profile_laundry_m');
			$this->load->library('form_validation');
		}

		public function index(){
			$data['disimpan'] 	= $this->Pengelola_m->jumlahTransaksiHariIni();
			$data['proses'] 	= $this->Pengelola_m->jumlahTransaksiProses();
			$data['selesai'] 	= $this->Pengelola_m->jumlahTransaksiSelesai();
			$data['batal'] 		= $this->Pengelola_m->jumlahTransaksiBatal();
			$data['jenis'] 		= $this->Jenis_cuci_m->getAllJenisCuci();
			$data['transaksi'] 	= $this->Pengelola_m->getTransaksi();
			$this->load->view('home_operator',$data);
		}

		public function menu_data_transaksi(){
			$data['transaksi'] 	= $this->Pengelola_m->getTransaksi();
			$this->load->view('menu/data_transaksi',$data);
		}

		public function menu_profile(){
			$this->load->view('menu/profile');
		}

		public function detail_transaksiOperator($id_transaksi = null){
			$id_transaksi = $this->uri->segment(2);
			//print_r($id_transaksi);die;
			$data['sumBayar']  = $this->Pengelola_m->getSumBayar($id_transaksi);
			$data['userLimit'] = $this->Pengelola_m->userTransaksiLimit($id_transaksi);
			$data['transaksi'] = $this->Pengelola_m->detailTransaksi($id_transaksi);
			$data['status']	   = $this->Pengelola_m->userTransaksiLimit($id_transaksi);	
			$this->load->view('menu/detail_transaksi',$data);
		}

		public function update_transaksiOperator(){
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
	}
?>