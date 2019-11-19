<?php 
 	defined('BASEPATH') OR exit('No direct access allowed');
 	class Pengelola_m extends CI_Model{

 		private $_table 	= "tb_user";
 		public $id_user;
 		public $nama_user;
 		public $gender;
 		public $no_telepon;
 		public $alamat;
 		public $email;
 		public $password;
 		public $level;
 		public $foto;
 		public $created;
 		public $deleted;

 		public function rules(){
 			return [
 				[
 					'field' => 'nama_user',
 					'label' => 'Nama_user',
 					'rules' => 'required'
 				],
 				[
 					'field' => 'gender',
 					'label' => 'Gender',
 					'rules' => 'required'
 				],
 				[
 					'field' => 'no_telepon',
 					'label' => 'No_telepon',
 					'rules' => 'required'
 				],
 				[
 					'field' => 'alamat',
 					'label' => 'Alamat',
 					'rules' => 'required'
 				],
 				[
 					'field' => 'email',
 					'label' => 'Email',
 					'rules' => 'required'
 				],
 				[
 					'field' => 'password',
 					'label' => 'Password',
 					'rules' => 'required'
 				],
 				[
 					'field' => 'level',
 					'label' => 'Level',
 					'rules' => 'required'
 				]
 				// ,
 				// [
 				// 	'field' => 'foto',
 				// 	'label' => 'Foto',
 				// 	'rules' => 'required'
 				// ]

 			];
 			
 		}

 		public function getAllUser(){
 			$query = $this->db->query("SELECT * FROM tb_user WHERE deleted !=1")->result();
 			return $query;
 		}

 		public function getByIdUser($id_user){
 			return $this->db->get_where($this->_table,['id_user' => $id_user])->result_array();
 		}

 		public function saveUser(){
 			$this->db->cache_on();
 			$now = date('Y-m-d H:i:s');

 			$post = $this->input->post();
 			//$this->id_user 		= uniqid();
 			$this->nama_user 	= $post["nama_user"];
 			$this->gender 		= $post["gender"];
 			$this->no_telepon 	= $post["no_telepon"];
 			$this->alamat 		= $post["alamat"];
 			$this->email 		= $post["email"];
 			$this->password 	= $post["password"];
 			$this->level 		= $post["level"];
 			$this->foto 		= $this->uploadImageUser();
 			$this->created 		= $now;
 			$this->deleted 		= 0;
 			$this->db->insert($this->_table,$this);
 		}

 		public function cekRow($data){
 			$no_telepon = $data[0];
 			$email = $data[1];

 			$query = $this->db->query("SELECT * FROM tb_user WHERE
 			 no_telepon='$no_telepon' AND email='$email'")->num_rows();
 			return $query;
 		}

 		public function updateUser(){
 			$post = $this->input->post();
 			$this->id_user 		= $post['id_user'];
 			$this->nama_user 	= $post["nama_user"];
 			$this->gender 		= $post["gender"];
 			$this->no_telepon 	= $post["no_telepon"];
 			$this->alamat 		= $post["alamat"];
 			$this->email 		= $post["email"];
 			$this->password 	= $post["password"];
 			$this->level 		= $post["level"];

 			if(!empty($_FILES['foto']['name'])){
 				$this->foto = $this->uploadImageUser();
 			}else{
 				$this->foto = $post['old_image'];
 			}

 			$this->db->update($this->_table,$this,array('id_user' => $post['id_user']));
 		}

 		public function deleteUser($id_user){
 			//print_r($id_user);die;
 			//$this->hapusFotoUser($id_user);
 			$query = $this->db->query("UPDATE tb_user SET deleted='1' WHERE id_user='$id_user'");
 			return $query;
 		}

 		private function uploadImageUser(){
			$config['upload_path'] 		= "assets_pengelola/image/user_image/";
			$config['allowed_types'] 	= "gif|jpg|png";
			$config['file_name'] 		= $_FILES['foto']['name'];
			$config['overwrite'] 		= true;
			$config['max_size'] 		= 1024;

			$this->load->library('upload',$config);

			if($this->upload->do_upload('foto')){
				return $this->upload->data('file_name');
			}
			return "default.jpg";
		}

		private function hapusFotoUser($id_user){
			$user = $this->getByIdUser($id_user);
			if($user->foto != "default.jpg"){
				$filename = explode(".", $user->foto)[0];
				return array_map('unlink',glob(FCPATH."assets_pengelola/image/user_image/$filename.*"));
			}
		}

		public function GetRowMember($keyword){
			$this->db->like('no_telepon',$keyword,'both');
			$this->db->order_by('no_telepon','ASC');
			$this->db->limit(10);
			return $this->db->get('tb_user')->result();
		}

		public function dataMember($no_telepon){
			$query = $this->db->query("SELECT * FROM tb_user WHERE no_telepon = '$no_telepon'");
			//print_r($no_telepon);die;
			if($query->num_rows() > 0){
				foreach($query->result() as $data){
					$hasil= array(
						'id_user' 		=> $data->id_user,
						'nama_user' 	=> $data->nama_user,
						'no_telepon' 	=> $data->no_telepon,
						'alamat' 		=> $data->alamat,
					);
					return $hasil;
				}

			}
			
		}

		public function addTransaksi($transaksi){
			$data = $this->db->insert('tb_transaksi',$transaksi);
		}

		public function detailTransaksi($id_user){
			$query = $this->db->query("SELECT a.*,b.nama_user as nama_operator,b.no_telepon as no_operator,
			b.email as email_operator,c.nama_user as nama_member,c.no_telepon as no_member,c.email as email_member,
			c.alamat as alamat_member,d.nama_jenis,d.harga FROM tb_transaksi a 
			left join tb_user b on a.id_operator = b.id_user
			left join tb_user c on a.id_user = c.id_user
			left join tb_jenis_cuci d on a.id_jenis_cuci = d.id_jenis_cuci
			WHERE a.id_user='$id_user' AND status_cucian ='Disimpan' and status_bayar='Belum Lunas'  ORDER BY id_transaksi")->result_array();
			return $query;
		}

		public function userTransaksiLimit($id_user){
			$query = $this->db->query("SELECT a.*,b.nama_user as nama_operator,b.no_telepon as no_operator,
			b.email as email_operator,c.nama_user as nama_member,c.no_telepon as no_member,c.email as email_member,
			c.alamat as alamat_member,d.nama_jenis,d.harga FROM tb_transaksi a 
			left join tb_user b on a.id_operator = b.id_user
			left join tb_user c on a.id_user = c.id_user
			left join tb_jenis_cuci d on a.id_jenis_cuci = d.id_jenis_cuci
			WHERE a.id_user='$id_user' AND status_cucian ='Disimpan'
			and status_bayar='Belum Lunas'  ORDER BY id_transaksi LIMIT 1")->result_array();
			return $query;
		}

		public function getSumBayar($id_user){
			$query = $this->db->query("select sum(total_harga) as total_biayar from tb_transaksi 
				WHERE id_user='$id_user' AND status_cucian ='Disimpan' and status_bayar='Belum Lunas'")->result_array();
			return $query;
		}

		public function cekTransaksi($id_user){
			$query = $this->db->query("SELECT * FROM tb_transaksi 
				WHERE id_user='$id_user' AND status_bayar !='Lunas' AND 
				status_cucian !='Selesai'")->num_rows();
			return $query;
		}
 	}
?>