 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$isi['kehilangan']	= $this->db->query("SELECT * FROM barang WHERE jenis='kehilangan'");
		$isi['ditemukan']	= $this->db->query("SELECT * FROM barang WHERE jenis='ditemukan'");
		$isi['fasilitas']	= $this->db->query("SELECT * FROM fasilitas");
		$this->load->view('admin/home_admin', $isi);
	}

	public function kehilangan() {
		$isi['title']	= "Kehilangan";
		$isi['data']	= $this->db->query("SELECT * FROM barang WHERE jenis='kehilangan'");
		$this->load->view('admin/view_kehilangan',$isi);
	}

	public function ditemukan() {
		$isi['title']	= "Ditemukan";
		$isi['data']	= $this->db->query("SELECT * FROM barang WHERE jenis='ditemukan'");
		$this->load->view('admin/view_ditemukan',$isi);
	}

	public function fasilitas() {
		$isi['title'] 	= "Fasilitas";
		$isi['data']	= $this->db->query("SELECT * FROM fasilitas");
		$this->load->view('admin/view_fasilitas',$isi);
	}
}