<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_infouser extends CI_model{

	function cari_user($id_user){		
		$query = $this->db->query("SELECT * FROM user WHERE id_user='$id_user'");

		return $query;
	}	
}