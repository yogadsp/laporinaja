<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Lapor_Fasilitas  extends CI_Controller {

  public function index()
  {
    $this->load->view('V_lapor_fasilitas');
  }
  
  function simpan_laporan(){
  $this->load->helper(array('form', 'url'));
      
    
    

    //config utk upload gambar

    $config['upload_path']    = './upload/fasilitas/'; //Upload path fasilitas
    $config['allowed_types']  = 'jpg|png|jpeg|bmp';
    $config['max_size']     = 10240;
    $config['encrypt_name']   = TRUE;
    $this->load->library('upload', $config);
    // $this->upload->initialize($config);

    if($this->upload->do_upload('img_barang')){
      $data1 = array('upload_data' => $this->upload->data());

      $img= $data1['upload_data']['file_name'];

        	date_default_timezone_set('Asia/Jakarta');
        $data['tanggal'] 		=   date("Y-m-d H:i:s");
      	$data['nama']			= $this->input->post('nama');
      	$data['keluhan']		= $this->input->post('keluhan');
      	$data['lokasi']			= $this->input->post('lokasi');
        $data['gambar']     = $img;
      	$data['kontak']			= $this->input->post('kontak');
      	$data['id_user']		= $this->input->post('id_user');

      		$this->load->model('User/M_laporan_fasilitas');
      		$this->M_laporan_fasilitas->simpan_laporan($data);

      		echo '<script>alert("You Have Successfully upload this Record!");</script>';
                     redirect(base_url('C_lapor_fasilitas'), 'refresh');

        }else{
        echo '<script>alert("Failed upload this Record!");</script>';
        redirect(base_url('C_lapor_fasilitas'), 'refresh');
    }
  }
}