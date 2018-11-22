<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keamanan extends CI_model{

	function cek_login(){		
		$id_user = $this->session->userdata('id_user');
		$level = $this->session->userdata('level');

		if(empty($id_user)){
			echo '<script>alert("Anda harus login dahulu!");</script>'; //tambahin sendiri kalo jquery
			redirect('home');
		}
	}	
}