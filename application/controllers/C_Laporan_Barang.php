<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class C_Laporan_Barang extends CI_Controller
{
	function __construct(){
        parent::__construct();
	}

	public function index()
	{
		$this->load->view('V_lapor_kehilangan');
	}

	
	function simpan_laporan(){
		$this->load->helper(array('form', 'url'));
			//data utk post ke database

		
date_default_timezone_set('Asia/Jakarta');
		$data['tanggal'] 		= date("Y-m-d H:i:s");
		$data['jenis']			= $this->input->post('jenis');
		$data['nama']			= $this->input->post('nama_barang');
		$data['spesifikasi']	= $this->input->post('spesifikasi');
		$data['lokasi']			= $this->input->post('lokasi');
		$data['kontak']			= $this->input->post('kontak');
		$data['gambar']			= $img;
		$data['id_user']		= $this->input->post('id_user');
		

		$this->load->model('User/M_Laporan_Barang');
		$this->M_Laporan_Barang->simpan_laporann($data);
		

		//config utk upload gambar

		$config['upload_path']		= './upload/barang/';
		$config['allowed_types']	= 'jpg|png|jpeg|bmp';
		$config['max_size']			= 10240;
		$config['encrypt_name'] 	= TRUE;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->upload->do_upload('img_barang')){
			$data = array('upload_data' => $this->upload->data());

			$img= $data['upload_data']['filename'];


			// redirect(base_url('C_Laporan_Barang'), 'refresh');
			echo '<script>alert("You Have Successfully updated this Record!");</script>';
		}else{
			echo '<script>alert("Failed upload this Record!");</script>';
		}
        
               

	}
}