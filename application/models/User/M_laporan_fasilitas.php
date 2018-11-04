<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan_fasilitas extends CI_model{

	function simpan_laporan($data){
		$query = $this->db->insert('fasilitas',$data);		
	}
}