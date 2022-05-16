<?php
defined('BASEPATH')  OR exit ('No direct script acces allowed');

class M_Auth extends CI_Model{

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function register($table,$where){		
		return $this->db->insert($table,$where);
	}
}