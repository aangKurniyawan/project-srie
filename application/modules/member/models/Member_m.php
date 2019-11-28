<?php
	defined('BASEPATH') OR exit('No direct access allowed');
	class Member_m extends CI_Model{
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
		public function getProfile(){
			$query = $this->db->query("SELECT * FROM tb_outlet ")->result_array();
			return $query;
		}
		public function getByIdUser($id_user){
 			return $this->db->get_where($this->_table,['id_user' => $id_user	])->result_array();
 		}

	 	public function updateProfile($where,$update){
			$this->db->where($where);
			$this->db->update("tb_user",$update);
		}	

		public function cekStatus($id_transaksi){
			$query = $this->db->query("SELECT a.*,b.nama_user as nama_operator,b.no_telepon as no_operator,
			b.email as email_operator,c.nama_user as nama_member,c.no_telepon as no_member,
			c.email as email_member,
			c.alamat as alamat_member,d.nama_jenis,d.harga FROM tb_transaksi a 
			left join tb_user b on a.id_operator = b.id_user
			left join tb_user c on a.id_member = c.id_user
			left join tb_jenis_cuci d on a.id_jenis = d.id_jenis_cuci
			WHERE a.id_transaksi='$id_transaksi' ORDER BY id_transaksi DESC LIMIT 1")->result_array();
			return $query;
		}

		public function getProfileMember($id_user){
			$query = $this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user'")->result_array();
			return $query;
		}

		public function getDataTransaksiMember($id_member){
			$query = $this->db->query("SELECT a.*,b.nama_user as nama_operator,b.no_telepon as no_operator,
			b.email as email_operator,c.nama_user as nama_member,c.no_telepon as no_member,c.email as email_member,
			c.alamat as alamat_member,d.nama_jenis,d.harga FROM tb_transaksi a 
			left join tb_user b on a.id_operator = b.id_user
			left join tb_user c on a.id_member = c.id_user
			left join tb_jenis_cuci d on a.id_jenis = d.id_jenis_cuci
			WHERE a.id_member='$id_member' ORDER BY id_transaksi DESC LIMIT 1")->result_array();
			return $query;
		}

		public function insertFeedback($insert){
			$this->db->insert("tb_feedback",$insert);
		}
	}
?>