<?php
	defined('BASEPATH') OR exit('No dirrect acces allowed');
	class Profile_laundry_m extends CI_Model{

		private $tb_outlet = "tb_outlet";

		public $id_outlet;
		public $nama_outlet;
		public $moto_outlet;
		public $no_telepon;
		public $email;
		public $alamat;
		// public $foto1;
		// public $foto2;
		// public $foto3;
		// public $foto4;
		// public $foto5;
		public $id_user;
		public $created;
		public $deleted;

		public function rules(){
			return[
				[
					'field' => 'nama_outlet',
					'label' => 'nama_outlet',
					'rules' => 'required'
				],
				[
					'field' => 'moto_outlet',
					'label' => 'moto_outlet',
					'rules' => 'required'
				],
				[
					'field' => 'no_telepon',
					'label' => 'no_telepon',
					'rules' => 'required'
				],
				[
					'field' => 'email',
					'label' => 'email',
					'rules' => 'required'
				],
				[
					'field' => 'alamat',
					'label' => 'alamat',
					'rules' => 'required'
				]
				// ,
				// [
				// 	'field' => 'foto1',
				// 	'label' => 'foto1',
				// 	'rules' => 'required'
				// ],
				// [
				// 	'field' => 'foto2',
				// 	'label' => 'foto2',
				// 	'rules' => 'required'
				// ],
				// [
				// 	'field' => 'foto3',
				// 	'label' => 'foto3',
				// 	'rules' => 'required'
				// ],
				// [
				// 	'field' => 'foto4',
				// 	'label' => 'foto4',
				// 	'rules' => 'required'
				// ],
				// [
				// 	'field' => 'foto5',
				// 	'label' => 'foto5',
				// 	'rules' => 'required'
				// ],
			];
		}


		public function getAllProfileLaundry(){
			$query = $this->db->query("SELECT * FROM tb_outlet GROUP BY 
				id_outlet DESC LIMIT 1")->result_array();
			return $query;
		}

		public function saveProfileLaundry(){
			$this->db->cache_on();
 			$now = date('Y-m-d H:i:s');
 			//echo "string";die;
 			$post = $this->input->post();
 			$this->nama_outlet 	= $post['nama_outlet'];
 			$this->moto_outlet 	= $post['moto_outlet'];
 			$this->no_telepon 	= $post['no_telepon'];
 			$this->email 		= $post['email'];
 			$this->alamat 		= $post['alamat'];
 			// $this->foto1 		= $this->uploadImageProfile1();
 			// $this->foto2 		= $this->uploadImageProfile2();
 			// $this->foto3 		= $this->uploadImageProfile3();
 			// $this->foto4 		= $this->uploadImageProfile4();
 			// $this->foto5 		= $this->uploadImageProfile5();
 			$this->id_user 		= $post['id_user'];
 			$this->created 		= $now;
 			$this->deleted 		= 0;
 			$this->db->insert($this->tb_outlet,$this);
		} 

		public function updateProfileOutlet(){
			$post = $this->input->post();
			$this->id_outlet 	= $post['id_outlet'];
 			$this->nama_outlet 	= $post['nama_outlet'];
 			$this->moto_outlet 	= $post['moto_outlet'];
 			$this->no_telepon 	= $post['no_telepon'];
 			$this->email 		= $post['email'];
 			$this->alamat 		= $post['alamat'];
 			$this->id_user 		= $post['id_user'];

 			$this->db->update($this->tb_outlet,$this,array('id_outlet' => $post['id_outlet']));
		}
		private function uploadImageProfile1(){
			$config['upload_path'] 		= "assets_pengelola/image/user_image/";
			$config['allowed_types'] 	= "gif|jpg|png";
			$config['file_name'] 		= $_FILES['foto1']['name'];
			$config['overwrite'] 		= true;
			$config['max_size'] 		= 1024;

			$this->load->library('upload',$config);

			if($this->upload->do_upload('foto1')){
				return $this->upload->data('file_name');
			}
			return "default1.jpg";
		}

		private function uploadImageProfile2(){
			$config['upload_path'] 		= "assets_pengelola/image/user_image/";
			$config['allowed_types'] 	= "gif|jpg|png";
			$config['file_name'] 		= $_FILES['foto2']['name'];
			$config['overwrite'] 		= true;
			$config['max_size'] 		= 1024;

			$this->load->library('upload',$config);

			if($this->upload->do_upload('foto2')){
				return $this->upload->data('file_name');
			}
			return "default2.jpg";
		}

		private function uploadImageProfile3(){
			$config['upload_path'] 		= "assets_pengelola/image/user_image/";
			$config['allowed_types'] 	= "gif|jpg|png";
			$config['file_name'] 		= $_FILES['foto3']['name'];
			$config['overwrite'] 		= true;
			$config['max_size'] 		= 1024;

			$this->load->library('upload',$config);

			if($this->upload->do_upload('foto3')){
				return $this->upload->data('file_name');
			}
			return "default3.jpg";
		}

		private function uploadImageProfile4(){
			$config['upload_path'] 		= "assets_pengelola/image/user_image/";
			$config['allowed_types'] 	= "gif|jpg|png";
			$config['file_name'] 		= $_FILES['foto4']['name'];
			$config['overwrite'] 		= true;
			$config['max_size'] 		= 1024;

			$this->load->library('upload',$config);

			if($this->upload->do_upload('foto4')){
				return $this->upload->data('file_name');
			}
			return "default4.jpg";
		}

		private function uploadImageProfile5(){
			$config['upload_path'] 		= "assets_pengelola/image/user_image/";
			$config['allowed_types'] 	= "gif|jpg|png";
			$config['file_name'] 		= $_FILES['foto5']['name'];
			$config['overwrite'] 		= true;
			$config['max_size'] 		= 1024;

			$this->load->library('upload',$config);

			if($this->upload->do_upload('foto5')){
				return $this->upload->data('file_name');
			}
			return "default5.jpg";
		}
	} 
?>