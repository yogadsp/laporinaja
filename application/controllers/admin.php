 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$isi['title'] = "Home";
		$isi['kehilangan']	= $this->db->query("SELECT * FROM barang WHERE jenis='kehilangan'");
		$isi['ditemukan']	= $this->db->query("SELECT * FROM barang WHERE jenis='ditemukan'");
		$isi['fasilitas']	= $this->db->query("SELECT * FROM fasilitas");
		$this->load->view('admin/home_admin', $isi);
	}

	public function kehilangan() {
		$isi['title']	= "Kehilangan";
		$isi['data']	= $this->db->query("SELECT * FROM barang WHERE jenis='kehilangan'");
		$this->load->view('admin/view_kehilangan',$isi);
	}

	// public function edit_status_postingan() {
	// 	$id_kehilangan = $this->uri->segment(3);

	// 	$isi['title']	= "Edit Kehilangan";

	// 	$query = $this->db->query("SELECT * FROM barang WHERE id_kehilangan='$id_kehilangan'");

	// 	$row = $query->row();

	// 	if (isset($row))
	// 	{	
	//         $isi['status'] = $row->status;
	// 	}

	// 	$this->load->view('admin/view_edit_kehilangan', $isi);
	// }

	public function update_status(){
		$id_kehilangan	= $this->input->post('id_kehilangan');
		$jenis			= $this->input->post('jenis');

		$data['status']			= $this->input->post('status');

		$this->load->model('M_kehilangan');
		$this->M_kehilangan->update_kehilangan($id_kehilangan, $data);
		// $this->load->model('M_infouser');
	}


	public function ditemukan() {
		$isi['title']	= "Ditemukan";
		$isi['data']	= $this->db->query("SELECT * FROM barang WHERE jenis='ditemukan'");
		$this->load->view('admin/view_ditemukan',$isi);
	}

	public function fasilitas() {
		$isi['title'] 	= "Fasilitas";
		$isi['data']	= $this->db->query("SELECT * FROM fasilitas");
		$this->load->view('admin/view_fasilitas',$isi);
	}

	public function user() {
		$isi['title'] 	= "User";
		$isi['data']	= $this->db->query("SELECT * FROM user WHERE level='user'");
		$this->load->view('admin/view_user',$isi);
	}

	public function infouser() {
		$id_user = $this->input->post('id_user');

		$this->load->model('M_infouser');
		$data = $this->M_infouser->cari_user($id_user);
		$output = '';
		foreach($data->result_array() as $row) {
			$output .= '<div class="form-group">
				        	<label>ID User :</label>	'. $row["id_user"] . '</div>' .
						'<div class="form-group">
				        	<label>Nama		:</label>	'. $row["nama"] . '</div>' .
				        '<div class="form-group">
				        	<label>Kontak	:</label>	'. $row["kontak"] . '</div>';
		}
		echo $output;
	}	

	public function pesan() {
		$isi['title'] 	= "Pesan";
		$isi['data']	= $this->db->query("SELECT * FROM pesan");
		$this->load->view('admin/view_pesan',$isi);
	}		
}