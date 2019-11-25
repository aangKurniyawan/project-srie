<?php
	defined('BASEPATH') OR exit('No direct access allowed');
	class Login_m extends CI_Model{
		public function cek_login($table,$where){
			return $this->db->get_where($table,$where);
		}

		public function cek_user($where){
			$email 		= $where['email'];
			$password 	= $where['password'];
			//print_r($password);die;
			$query = $this->db->query(" SELECT * FROM tb_user WHERE email='$email' AND password = '$password' ")->result_array();
			return $query;
		}
	}
?>