<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Lapor_Fasilitas  extends CI_Controller {

  public function index()
  {
    $this->load->view('V_lapor_fasilitas');
  }
  
  function simpan_laporan(){
  	date_default_timezone_set('Asia/Jakarta');
  	$data['tanggal'] 		=   date("Y-m-d H:i:s");
	$data['nama']			= $this->input->post('nama');
	$data['keluhan']		= $this->input->post('keluhan');
	$data['lokasi']			= $this->input->post('lokasi');
	$data['kontak']			= $this->input->post('kontak');
	$data['id_user']		= $this->input->post('id_user');

		$this->load->model('User/M_laporan_fasilitas');
		$this->M_laporan_fasilitas->simpan_laporan($data);

		echo '<script>alert("You Have Successfully updated this Record!");</script>';
               redirect(base_url('C_lapor_fasilitas'), 'refresh');
  }
}