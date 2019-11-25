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
 			return $this->db->get_where($this->_table,['id_user' => $id_user	])->result_array();
 		}

 		public function saveUser(){
 			$this->db->cache_on();
 			$now = date('Y-m-d H:i:s');

 			$post = $this->input->post();
 			//$this->id_member 		= uniqid();
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

 		public function deleteUser($id_member){
 			//print_r($id_member);die;
 			//$this->hapusFotoUser($id_member);
 			$query = $this->db->query("UPDATE tb_user SET deleted='1' WHERE id_member='$id_member'");
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

		private function hapusFotoUser($id_member){
			$user = $this->getByIdUser($id_member);
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


		public function detailTransaksi($id_transaksi){
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

		public function detailTransaksiAfterAdd($id_member){
			$query = $this->db->query("SELECT a.*,b.nama_user as nama_operator,b.no_telepon as no_operator,
			b.email as email_operator,c.nama_user as nama_member,c.no_telepon as no_member,
			c.email as email_member,
			c.alamat as alamat_member,d.nama_jenis,d.harga FROM tb_transaksi a 
			left join tb_user b on a.id_operator = b.id_user
			left join tb_user c on a.id_member = c.id_user
			left join tb_jenis_cuci d on a.id_jenis = d.id_jenis_cuci
			WHERE a.id_member='$id_member' ORDER BY id_transaksi DESC LIMIT 1")->result_array();
			return $query;
		}

		public function userTransaksiLimit($id_transaksi){
			$query = $this->db->query("SELECT a.*,b.nama_user as nama_operator,b.no_telepon as no_operator,
			b.email as email_operator,c.nama_user as nama_member,c.no_telepon as no_member,c.email as email_member,
			c.alamat as alamat_member,d.nama_jenis,d.harga FROM tb_transaksi a 
			left join tb_user b on a.id_operator = b.id_user
			left join tb_user c on a.id_member = c.id_user
			left join tb_jenis_cuci d on a.id_jenis = d.id_jenis_cuci
			WHERE a.id_transaksi='$id_transaksi'  ORDER BY id_transaksi DESC LIMIT 1")->result_array();
			return $query;
		}

		public function getSumBayar($id_transaksi){
			$query = $this->db->query("SELECT sum(total_harga) as total_biayar from tb_transaksi 
				WHERE id_transaksi='$id_transaksi' AND status_cucian ='Disimpan'")->result_array();
			return $query;
		}

		public function cekTransaksi($id_member){
			$query = $this->db->query("SELECT * FROM tb_transaksi 
				WHERE id_member='$id_member' AND status_bayar !='Lunas' AND 
				status_cucian !='Selesai' ORDER BY id_transaksi DESC ")->result_array();
			return $query;
		}

		public function getTransaksi(){
			$query = $this->db->query("select a.*,b.nama_user,b.no_telepon,c.nama_jenis from tb_transaksi a 
			left join tb_user b on a.id_member = b.id_user 
			left join tb_jenis_cuci c on a.id_jenis = c.id_jenis_cuci
			where CURDATE() ORDER BY id_transaksi DESC ")->result_array();
			return $query;
		}

		public function cekIdTransaksi($id_member){
			$query = $this->db->query("SELECT * FROM tb_transaksi WHERE 
				id_member='$id_member' ORDER BY id_transaksi DESC LIMIT 1")->result_array();
			return $query;
		}

		public function cekLastData($id_member){
			$query = $this->db->query("SELECT * FROM tb_transaksi WHERE id_member='$id_member'
			 ORDER BY id_transaksi DESC limit 1")->result_array();
			return $query;
		}

		public function update_status_transaksi($data){
			$id_transaksi 		= $data['id_transaksi'];
			$jumlah_pembayaran 	= $data['jumlah_pembayaran'];
			$sisa_bayar 		= $data['sisa_bayar'];
			$status_bayar 		= $data['status_bayar'];
			$status_cucian 		= $data['status_cucian'];
			//print_r($data);
			$query = $this->db->query("UPDATE tb_transaksi SET jumlah_pembayaran ='$jumlah_pembayaran',
				sisa_bayar='$sisa_bayar',status_bayar='$status_bayar',status_cucian='$status_cucian'
				WHERE id_transaksi='$id_transaksi'");
			return $query;
		}
		public function update_statusSelesai($data){
			$id_transaksi 		= $data['id_transaksi'];
			$status_cucian 		= $data['status_cucian'];
			//print_r($data);
			$query = $this->db->query("UPDATE tb_transaksi SET status_cucian='$status_cucian'
				WHERE id_transaksi='$id_transaksi'");
			return $query;
		}

		public function update_statusBatal($data){
			$id_transaksi 		= $data['id_transaksi'];
			$status_cucian 		= $data['status_cucian'];
			//print_r($data);
			$query = $this->db->query("UPDATE tb_transaksi SET status_cucian='$status_cucian'
				WHERE id_transaksi='$id_transaksi'");
			return $query;
		}

		public function jumlahTransaksiHariIni(){
			 $query = $this->db->query("select Date_Format(created,'%d/%m/%Y')as tgl,count(id_transaksi)
			 as jumlah_cucian,status_cucian from tb_transaksi where created BETWEEN CONCAT(CURDATE(),' 00:00:00')
			 AND CONCAT(CURDATE(),' 23:59:59') and status_cucian='Disimpan' ")->result_array();
			 return $query;
		}

		public function jumlahTransaksiProses(){
			 $query = $this->db->query("select Date_Format(created,'%d/%m/%Y')as tgl,count(id_transaksi)
			 as jumlah_cucian,status_cucian from tb_transaksi where created BETWEEN CONCAT(CURDATE(),' 00:00:00')
			 AND CONCAT(CURDATE(),' 23:59:59') and status_cucian='Dalam Pengerjaan' ")->result_array();
			 return $query;
		}
		public function jumlahTransaksiSelesai(){
			 $query = $this->db->query("select Date_Format(created,'%d/%m/%Y')as tgl,count(id_transaksi)
			 as jumlah_cucian,status_cucian from tb_transaksi where created BETWEEN CONCAT(CURDATE(),' 00:00:00')
			 AND CONCAT(CURDATE(),' 23:59:59') and status_cucian='Selesai Pengerjaan' ")->result_array();
			 return $query;
		}
		public function jumlahTransaksiBatal(){
			 $query = $this->db->query("select Date_Format(created,'%d/%m/%Y')as tgl,count(id_transaksi)
			 as jumlah_cucian,status_cucian from tb_transaksi where created BETWEEN CONCAT(CURDATE(),' 00:00:00')
			 AND CONCAT(CURDATE(),' 23:59:59') and status_cucian='Transaksi Batal' ")->result_array();
			 return $query;
		}

		public function getTransaksiBulananDisimpan(){
			$query = $this->db->query("SELECT CONCAT(YEAR(created),'/',MONTH(created)) AS tahun_bulan,
			 COUNT(*) AS jumlah_bulanan,status_cucian
			FROM tb_transaksi
			WHERE CONCAT(YEAR(created),'/',MONTH(created))=CONCAT(YEAR(NOW()),'/',MONTH(NOW())) and
			status_cucian='Disimpan'
			GROUP BY YEAR(created),MONTH(created),status_cucian")->result_array();
			return $query;
		}

		public function getTransaksiBulananDiproses(){
			$query = $this->db->query("SELECT CONCAT(YEAR(created),'/',MONTH(created)) AS tahun_bulan,
			 COUNT(*) AS jumlah_bulanan,status_cucian
			FROM tb_transaksi
			WHERE CONCAT(YEAR(created),'/',MONTH(created))=CONCAT(YEAR(NOW()),'/',MONTH(NOW())) and
			status_cucian='Dalam Pengerjaan'
			GROUP BY YEAR(created),MONTH(created),status_cucian")->result_array();
			return $query;
		}

		public function getTransaksiBulananSelesai(){
			$query = $this->db->query("SELECT CONCAT(YEAR(created),'/',MONTH(created)) AS tahun_bulan,
			 COUNT(*) AS jumlah_bulanan,status_cucian
			FROM tb_transaksi
			WHERE CONCAT(YEAR(created),'/',MONTH(created))=CONCAT(YEAR(NOW()),'/',MONTH(NOW())) and
			status_cucian='Selesai Pengerjaan'
			GROUP BY YEAR(created),MONTH(created),status_cucian")->result_array();
			return $query;
		}

		public function getTransaksiBulananBatal(){
			$query = $this->db->query("SELECT CONCAT(YEAR(created),'/',MONTH(created)) AS tahun_bulan,
			 COUNT(*) AS jumlah_bulanan,status_cucian
			FROM tb_transaksi
			WHERE CONCAT(YEAR(created),'/',MONTH(created))=CONCAT(YEAR(NOW()),'/',MONTH(NOW())) and
			status_cucian='Transaksi Batal'
			GROUP BY YEAR(created),MONTH(created),status_cucian")->result_array();
			return $query;
		}
 	}
?>