<?php
	defined('BASEPATH') OR exit('No direct access allowed');
	class Member_m extends CI_Model{
		
		public function getProfile(){
			$query = $this->db->query("SELECT * FROM tb_outlet ")->result_array();
			return $query;
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
	}
?>