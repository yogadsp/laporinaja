<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class C_Laporan_Barang extends CI_Controller
{
	public function index()
	{
		$this->load->view('V_lapor_kehilangan');
	}

	
	function simpan_laporan(){
		$this->load->helper(array('form','url'));
		
		//data utk post ke database
		date_default_timezone_set('Asia/Jakarta');
		$data['tanggal'] 		= date("Y-m-d H:i:s");
		$data['jenis']			= $this->input->post('jenis');
		$data['nama']			= $this->input->post('nama_barang');
		$data['spesifikasi']	= $this->input->post('spesifikasi');
		$data['lokasi']			= $this->input->post('lokasi');
		$data['kontak']			= $this->input->post('kontak');
		$data['id_user']		= $this->input->post('id_user');

		$this->load->model('User/M_Laporan_Barang');
		$this->M_Laporan_Barang->simpan_laporann($data);

		//config utk upload gambar
		if($data['jenis'] == 'Ditemukan'){
			$config['upload_path']		= './assets/gambar/Ditemukan';	
		}elseif($data['jenis'] == 'Kehilangan'){
			$config['upload_path']		= './assets/gambar/Kehilangan';
		}

		
		$config['allowed_types']	= 'jpg|png|jpeg';
		$config['max_width']		= 1000;
		$config['max_height']		= 1000;
		$config['max_size']			= 10240; //10mb

		$this->load->library('upload',$config);

		//fungsi upload + notif masih bingung
		//upload masih error
		$this->upload->do_upload('img_barang');
		echo '<script>alert("You Have Successfully updated this Record!");</script>';
        redirect(base_url('C_Laporan_Barang'), 'refresh');
               

	}
}
