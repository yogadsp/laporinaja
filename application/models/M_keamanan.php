<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keamanan extends CI_model{

	function cek_login(){		
		$id_user = $this->session->userdata('id_user');
		$level = $this->session->userdata('level');

		if(empty($id_user)){
			redirect('home');
		} else {
			if($level == "admin"){
				redirect('admin');
			} elseif ($level == "user") {
				redirect('home');
			}
		}
	}	
}