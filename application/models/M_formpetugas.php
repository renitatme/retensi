<?php
defined('BASEPATH')  OR exit ('No direct script acces allowed');

class M_formpetugas extends CI_Model{

	function cek_nama_petugas($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function password($table,$where){		
		return $this->db->insert($table,$where);
	}
}