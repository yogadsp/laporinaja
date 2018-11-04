<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_kehilangan extends CI_Controller {

	public function index()
	{
		$isi['data']		= $this->db->query("SELECT * FROM barang");
		$this->load->view('admin/view_kehilangan',$isi);
	}
}

