<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$isi['data'] = 
		$this->db->query
		("SELECT id_kehilangan, tanggal, jenis, nama, spesifikasi, lokasi FROM barang ORDER BY tanggal DESC LIMIT 13");
		$this->load->view('homepage', $isi);
	}
}