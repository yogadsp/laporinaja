<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Tentang  extends CI_Controller {

	public function index()
	{
		$this->load->view('V_tentang');
	}
}