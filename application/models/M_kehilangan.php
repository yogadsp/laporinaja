<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kehilangan extends CI_model{

	function update_kehilangan($id_kehilangan, $data){		
		$data['status'] = '1';

		$kondisi = array(
	        'status' => $data['status']
		);
		$query = $this->db->where('id_kehilangan', $id_kehilangan)->update('barang', $kondisi);
		// $query = $this->db->update('barang', $kondisi);

		// if($query){
		// 	echo '<span class="badge badge-success">Posted</span>';
		// }

		// if($query && $jenis == 'kehilangan'){
		// 	echo '<script> alert("Sukses"); </script>';
		// 	redirect('admin/kehilangan');
		// } else if ($query && $jenis == 'ditemukan'){
		// 	echo '<script> alert("Sukses"); </script>';
		// 	redirect('admin/kehilangan');
		// } else {
		// 	echo '<script> alert("Gagal"); </script>';
		// 	redirect('admin/edit_kehilangan');
		// }
	}	
}