<!DOCTYPE html>
<html>
<head>
	<title>Laporin Aja</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/OwlCarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/OwlCarousel/dist/assets/owl.carousel.default.min.css">
	<?php $this->load->view('tab-icon'); ?>
</head>
<body>
<?php
    $nama = $this->session->userdata('nama');
    $id_user = $this->session->userdata('id_user'); 
    $kontak = $this->session->userdata('kontak'); 
 ?>
	<?php $this->load->view('V_menu'); ?>
	<?php $this->load->view('V_login'); ?>
	<?php $this->load->view('V_header'); ?>

	<div class="container isi">
		<div class="row">
		    <div class="col-md-3">
		    </div>
		  	<div class="col-md-6 form-laporan">
	    <!------------ FORM !------------>
	    <!------------ 
	    		input otomatis
				- id_laporan
				- id_user
				- id_admin di null dulu
				- id_fasilitas
				- tanggal_laporan
	     ------------>
			    <form action="<?php echo base_url();?>C_lapor_fasilitas/simpan_laporan" method="post" id="frm_keluhan">
			      <h1 class="text-center form-header">Buat Laporan</h1>
			      <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
			      <input type="hidden" name="kontak" value="<?php echo $kontak;?>">
			      <div class="form-group row">
			        <label for="nama_fasilitas" class="col-sm-4 col-form-label">Nama Fasilitas</label>
			          <div class="col-sm-8">
			            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama fasilitas yang akan dilaporkan ...">
			          </div>
			      </div>

			      <div class="form-group row">
			        <label for="keluhan" class="col-sm-4 col-form-label">Keluhan</label>
			          <div class="col-sm-8">
			            <textarea rows="4" cols="50" class="form-control" name="keluhan" form="frm_keluhan" placeholder="Deskripsikan keluhan anda ... "></textarea>
			          </div>
			      </div>

			      <div class="form-group row">
			        <label for="lokasi" class="col-sm-4 col-form-label">Lokasi</label>
			          <div class="col-sm-8">
			            <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
			          </div>
			      </div>

			      <input type="submit" class="btn btn-primary btn-block" name="tambah" value="Submit">

			    </form>

	    	</div>
		</div>
	</div>

	<?php $this->load->view('V_footer'); ?>

	<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/OwlCarousel/dist/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.mousewheel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	

</body>
</html>