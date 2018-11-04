<!DOCTYPE html>
<html>
<head>
	<title>Laporin Aja</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya2.css">
	<?php $this->load->view('tab-icon'); ?>
</head>
<body>
	<?php $this->load->view('V_menu'); ?>
	<?php $this->load->view('V_login'); ?>
	<?php $this->load->view('V_header'); ?>
	<?php
		$nama = $this->session->userdata('nama');
		$id = $this->session->userdata('id'); 
	?>
		<div class="container isi">
			<div class="row">
				<div class="form-group kolom-cari">
					<form action="<?php echo base_url('C_kehilangan/cari');?>" method="post">
						<input type="text" name="nama_barang" placeholder="Ketik disini...">
						<input type="submit" name="cari_barang" value="CARI">
					</form>
				</div>
				<div class="kolom-lapor">
					<a 
					<?php 
			        	if(empty($nama) && empty($id)){ 
			        ?> 		
			        	href="#" data-toggle="modal" data-target="#login">
			        <?php 
			        	} else {
			        ?>
						href="<?php echo base_url('C_kehilangan/form_laporan');?>">
					<?php 
						}
					?><button class="btn btn-warning">Buat Laporan</button></a>
				</div>

			</div>

			<!-- Ambil data dari database -->
			<!-- Perulangan tag html nya pake php -->

			<div class="row list-data">
					
					<?php
					foreach ($data->result() as $row ) { ?>
					<div class="card list-data-content" style="width: 23%;">
					  <div class="card-body">
					  	<?php 
					  		if($row->jenis == 'kehilangan') {
					  			echo '<p class="card-text text-status-h">Hilang</p>';
					  		} else if($row->jenis == 'ditemukan') {
					  			echo '<p class="card-text text-status-d">Ditemukan</p>';
					  		}
					  	?>
					    <a 
					    <?php 
			        		if(empty($nama) && empty($id)){
			        	?> 	
					    	href="#" data-toggle="modal" data-target="#login">
						<?php 
							} else {
						?>
							href="<?php echo base_url();?>C_kehilangan/detail/<?php echo $row->id_kehilangan; ?>">
						<?php } ?>
					    	<h5 class="card-title"><?php echo $row->nama; ?></h5>
					    </a>
					    <h6 class="card-subtitle mb-2 text-muted"><?php echo $row->tanggal; ?></h6>
					    <p class="card-text"><?php echo $row->spesifikasi; ?></p>
					  </div>
					</div>
					<?php } ?>
					
				
			</div>
		</div>

		<?php $this->load->view('V_footer'); ?>
	</div>

	<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.mousewheel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>