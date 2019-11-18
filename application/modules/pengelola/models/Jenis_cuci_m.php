<?php 
 	defined('BASEPATH') OR exit('No direct access allowed');
 	class Jenis_cuci_m extends CI_Model{

 		private $tb_jenis   = "tb_jenis_cuci";

 		public $id_user;
 		public $id_jenis_cuci;
 		public $nama_jenis;
 		public $harga;
 		public $lama_hari;
 		public $status;
 		public $deskripsi;

 		public function rules_jenis_cuci(){
 			return [
 				[
 					'field' => 'nama_jenis',
 					'label' => 'Nama_jenis',
 					'rules' => 'required'
 				],
 				[
 					'field' => 'harga',
 					'label' => 'Harga',
 					'rules' => 'required'
 				],
 				[
 					'field' => 'lama_hari',
 					'label' => 'Lama_hari',
 					'rules' => 'required'
 				],
 				[
 					'field' => 'status',
 					'label' => 'Status',
 					'rules' => 'required'
 				],
 				[
 					'field' => 'deskripsi',
 					'label' => 'Deskripsi',
 					'rules' => 'required'
 				]
 			];
 		}

 		public function getAllJenisCuci(){
 			$query = $this->db->query("SELECT * FROM tb_jenis_cuci WHERE deleted !=1")->result_array();
 			return $query;
 		}

 		public function saveJenisCuci(){
 			$this->db->cache_on();
 			$now = date('Y-m-d H:i:s');

 			$post = $this->input->post();
 			$this->nama_jenis	= $post["nama_jenis"];
 			$this->harga 		= $post["harga"];
 			$this->lama_hari 	= $post["lama_hari"];
 			$this->status 		= $post["status"];
 			$this->id_user 		= $post["id_user"];
 			$this->deskripsi 	= $post['deskripsi'];
 			$this->created 		= $now;
 			$this->deleted 		= 0;
 			$this->db->insert($this->tb_jenis,$this);
 		}

 		public function updateJenisCuci(){
 			$post = $this->input->post();
 			$this->id_jenis_cuci = $post['id_jenis_cuci'];
 			$this->nama_jenis	 = $post["nama_jenis"];
 			$this->harga 		 = $post["harga"];
 			$this->lama_hari 	 = $post["lama_hari"];
 			$this->status 		 = $post["status"];
 			$this->id_user 		 = $post["id_user"];
 			$this->deskripsi 	 = $post['deskripsi'];

 			$this->db->update($this->tb_jenis,$this,array('id_jenis_cuci' => $post['id_jenis_cuci']));
 		}

 		public function cek_harga($id_jenis_cuci){
 			$query = $this->db->query("SELECT * FROM tb_jenis_cuci 
 				WHERE id_jenis_cuci='$id_jenis_cuci'")->result_array();
 			return $query;
 		}
 	}
?>