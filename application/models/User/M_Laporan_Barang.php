<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Laporan_Barang extends CI_model{

	function simpan_laporann($data){
		$query = $this->db->insert('barang', $data);		
	}
}