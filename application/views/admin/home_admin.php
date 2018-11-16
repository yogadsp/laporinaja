<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya.css">
</head>
<body>

<div class="container-fluid">
	<div class="row">	
		<div class="header"></div>
	</div>
	<div class="row">
		<?php $this->load->view('admin/view_menu');?>
		<div class="col-md-10 isi">
			<div style="display: flex;">
				<div class="kotak" style="background-color: green;">
					<div class="text-center">
						<h3><?php echo $kehilangan->num_rows(); ?></h3>
						<h6>Kehilangan Barang</h6>
					</div>
				</div>
				<div class="kotak" style="background-color: blue;">
					<div class="text-center">
						<h3><?php echo $ditemukan->num_rows(); ?></h3>
						<h6>Barang Ditemukan</h6>
					</div>
				</div>
				<div class="kotak" style="background-color: grey;">
					<div class="text-center">
						<h3><?php echo $fasilitas->num_rows(); ?></h3>
						<h6>Laporan Fasilitas</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>