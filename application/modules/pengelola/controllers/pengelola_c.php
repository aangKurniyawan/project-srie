<?php
	defined('BASEPATH') OR exit('No direct acces allowed');
	class Pengelola_c extends CI_Controller{

		public function __construct(){
			parent:: __construct();
			$this->load->model('pengelola/Pengelola_m');
			$this->load->model('pengelola/Jenis_cuci_m');
			$this->load->model('pengelola/Profile_laundry_m');
			$this->load->library('form_validation');
		}
		public function index(){
			$this->load->view('Pengelola/home_pengelola');
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
			$data['jenis'] = $this->Jenis_cuci_m->getAllJenisCuci();
			$this->load->view('Pengelola/menu/data_transaksi',$data);
		}

		public function menu_profile_outlet(){
			$data['laundry'] = $this->Profile_laundry_m->getAllProfileLaundry();
			$this->load->view('Pengelola/menu/profile_outlet',$data);
		}

		public function menu_profile_pengelola(){
			$this->load->view('Pengelola/menu/profile_pengelola');
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

		public function formEdit($id_user = null){
			$id_user = $this->uri->segment(2);
			
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

		public function editUser($id_user = null){
			
			$id_user = $this->uri->segment(2);
			$id_user = $this->input->post('id_user');
			//print_r($id_user);die;
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

		public function hapusUser($id_user = null){
			$id_user = $this->uri->segment(2);
			if(!isset($id_user)) show_404();
			if($this->Pengelola_m->deleteUser($id_user)){
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
			$id_user 		= $this->input->post('id_user');
			$id_jenis_cuci 	= $this->input->post('id_jenis_cuci');
			$nama_member 	= $this->input->post('nama_member');
			$no_telepon		= $this->input->post('no_telepon');
			$alamat 		= $this->input->post('alamat');
			$berat_cuci 	= $this->input->post('berat_cuci');
			$id_operator 	= $this->input->post('id_operator');
			print_r($alamat);die;
		}
	}
?>