<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pesan extends CI_Controller {

	public function kirim()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['tanggal'] 		= date("Y-m-d H:i:s");
		$data['subject']		= $this->input->post('subject');
		$data['isi']			= $this->input->post('isi');
		$data['send_by']		= $this->input->post('send_by');
		
		$data['dibaca']			= '0';
		
		$this->load->model('M_pesan');
		$this->M_pesan->kirim_pesan($data);


		// $this->load->view('homepage', $isi);
	}

	public function detail()
	{
		$id_pesan = $this->uri->segment(3);


		$this->load->model('M_pesan');		
		$data = $this->M_pesan->detail($id_pesan);

		$row = $data->row();

		if (isset($row))
		{
	        $row->tanggal;
	        $row->subject;
	        $row->isi;
	        $row->send_by;
		}

		$this->load->view('admin/view_detail_pesan', $row);
	}

}
