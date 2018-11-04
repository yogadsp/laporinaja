<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Logout extends CI_Controller {

	public function aksi_logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}