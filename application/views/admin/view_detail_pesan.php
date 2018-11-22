<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard | <?php echo $title ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap.min.css">
</head>
<body>

<?php $this->load->view('admin/view_header');?>
<?php $this->load->view('admin/view_menu');?>
	<div class="isi">
		<div class="row">

		<div class="col-md-10">
			<div class="kotak">
				<div class="form-group row">
              		<label for="nama_barang" class="col-sm-4 col-form-label">Tanggal Kirim</label>
	                <div class="col-sm-8">
	                  <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" id="nama_barang1" value="<?php echo $tanggal?>" disabled>
	                </div>
            	</div>

            	<div class="form-group row">
              		<label for="nama_barang" class="col-sm-4 col-form-label">Pengirim</label>
	                <div class="col-sm-8">
	                  <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" id="nama_barang1" value="<?php echo $send_by?>" disabled>
	                </div>
            	</div>

            	<div class="form-group row">
              		<label for="nama_barang" class="col-sm-4 col-form-label">Subject</label>
	                <div class="col-sm-8">
	                  <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" id="nama_barang1" value="<?php echo $subject?>" disabled>
	                </div>
            	</div>

            	<div class="form-group row">
              		<label for="nama_barang" class="col-sm-4 col-form-label">Isi</label>
	                <div class="col-sm-8">
	                  <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" id="nama_barang1" value="<?php echo $isi?>" disabled>
	                </div>
            	</div>
			</div>
		</div>
	</div>

	
</div>
	
	<?php $this->load->view('admin/view_footer');?>
	
</body>
</html>