<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kehilangan  extends CI_Controller {

	public function index()
	{	
		$isi['data'] = 
		$this->db->query
		("SELECT id_kehilangan, tanggal, jenis, nama, spesifikasi, lokasi FROM barang ORDER BY tanggal DESC limit 12");
		$this->load->view('V_kehilangan',$isi);
	}
	function form_laporan()
	{
		$this->load->model('M_Keamanan');
		$this->M_Keamanan->cek_login();
		$this->load->view('V_lapor_kehilangan');
	}

	public function detail()
	{
		$key = $this->uri->segment(3);
		
		$query = 
		$this->db->query
		("SELECT tanggal, jenis, nama, spesifikasi, lokasi, kontak, gambar FROM barang WHERE id_kehilangan='$key'");
		$row = $query->row();

		if (isset($row))
		{
	        $row->tanggal;
	        $row->jenis;
	        $row->nama;
	        $row->spesifikasi;
	        $row->lokasi;
	        $row->gambar;
		}

		$this->load->view('V_detail', $row);
	}

	public function cari(){
		$nama = $this->input->post('nama_barang');

		$isi['data'] = 
		$this->db->query
		("SELECT id_kehilangan, tanggal, jenis, nama, spesifikasi, lokasi FROM barang
		 WHERE nama LIKE '%".$nama."%'");

		$this->load->view('V_kehilangan',$isi);
		
	}
}