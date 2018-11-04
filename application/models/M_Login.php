<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_model{

	function cek_login($data){		
		$pwd = md5($data['p']);
		
		$this->db->where('id_user',$data['u']);
		$this->db->where('pass',$pwd);

		$query = $this->db->get('user');

		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$sess = array('id_user'	=> $row->id_user,
							  'pass' => $row->pass,
							   'nama' => $row->nama,
								'kontak' => $row->kontak);
				$level = $row->level;

				$this->session->set_userdata($sess);

				if($level == 'user'){
					redirect($data['url'],'refresh');
				}else if($level=='admin'){
					redirect('admin/adminhome');
				} else {
					echo"<script>ERROR!</script>";
				}
			}
		}
		else
		{
			$this->session->set_flashdata('info',
					'<div class="alert alert-block alert-dismiss">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ban-circle red"></i>
					<strong class="red">
					</strong>Maaf Pengguna atau Sandi salah </div>');
			redirect('login');
		}
	}	
}