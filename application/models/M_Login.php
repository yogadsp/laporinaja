<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_model{

	function cek_login($data){		
		$pwd = md5($data['p']);
		
		$this->db->where('id_user',$data['u']);
		$this->db->where('pass',$pwd);

		$query = $this->db->get('user');

		$res = array();

		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$sess = array(	'id_user'	=> $row->id_user,
							  	'pass' 		=> $row->pass,
							  	'nama' 		=> $row->nama,
								'kontak' 	=> $row->kontak,
								'level' 	=> $row->level);
				$level = $row->level;

				$this->session->set_userdata($sess);

				if($level == 'user'){
					echo "user";
					
					// redirect($data['url'],'refresh');

				} else if ($level=='admin'){
					echo "admin";
					// redirect('admin');
				} 
				// else {
				// 	echo"<script>ERROR!</script>";
				// }
			}
		}
		else
		{
			echo "salah_semua";
			// $row = $query->row();
			// if (isset($row))
			// {
		 //        $row->id_user;
			// 	$row->pass;
			// }

			// if($pass != $pwd ){
			// 		echo "salah_pass";
			// 	}else if($id_user != $data['u']){
			// 		// echo "string";
			// 		echo "salah_id";
			// 	} else if($pass  == $pwd ) {
			// 		echo "salah_semua";
			// 	}
			// $this->session->set_flashdata('info',
			// 		'<script> alert("Maaf Pengguna atau Sandi salah"); </script>');
			// // redirect('C_Login');
			// foreach ($query->result() as $row) {
				
			// 	else {
			// 		echo"<script>ERROR!</script>";
			// 	}
			// }
		}
	}	
}