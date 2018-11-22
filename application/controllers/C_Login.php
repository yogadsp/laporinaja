<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function aksi_login()
	{	
		$data['u'] = $this->input->post('user');
		$data['p'] = $this->input->post('pass');
		$this->load->model('M_Login');
		$this->M_Login->cek_login($data);
	}

}