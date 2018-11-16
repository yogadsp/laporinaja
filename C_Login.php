<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function aksi_login()
	{	
		$data['u'] = $this->input->post('user');
		$data['p'] = $this->input->post('pass');
		$data['url'] = $this->input->post('urlskrg');
		$this->load->model('M_Login');
		$this->M_Login->cek_login($data);
		// echo "ok1";
		// $res['haha'] = 0;
		// echo json_encode($res);
	}

	function cek_login(){
		$id = $this->session->userdata('id_user');

		if(empty($id)){
			echo '<script>alert("Anda belum login!");</script>';
               
		}
	}
}