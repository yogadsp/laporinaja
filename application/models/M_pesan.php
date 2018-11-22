<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_model{

	function kirim_pesan($data){
		// $query = $this->db->get('user');
		// $$this->db->where('id_user',$data['send_by']);
		$query = $this->db->select('*')->from('user')->where('id_user',$data['send_by'])->get();
		$row = $query->row();
		
			$level = $row->level;

			// $this->session->set_userdata($sess);

			if($level == 'user'){
				$data['send_to']  = '14116147';

				// redirect($data['url'],'refresh');

			} else if ($level=='admin'){
				// redirect('admin');
			} 
			// else {
			// 	echo"<script>ERROR!</script>";
			// }

		$this->db->insert('pesan', $data);
	}

	function detail($id_pesan){
		$dibaca = '1';

		$kondisi = array(
	        'dibaca' => $dibaca
		);

		$query = $this->db->select('*')->from('pesan')->where('id_pesan',$id_pesan)->get();
		$this->db->where('id_pesan', $id_pesan)->update('pesan', $kondisi);

		return $query;
	}
}