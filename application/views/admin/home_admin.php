<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard | <?php echo $title ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/chartist.min.css">
</head>
<body>

<?php $this->load->view('admin/view_header');?>
<?php $this->load->view('admin/view_menu');?>

<!-- <div class="container-fluid"> -->
	<!-- <div class="row menu-kiri"> -->
		
		<div class="isi">
			<div class="row">

				<div class="kotak">
					<div class="text-center">
						<h6>Kehilangan Barang</h6>
						<h3><?php echo $kehilangan->num_rows(); ?></h3>						
					</div>
				</div>

				<div class="kotak">
					<div class="text-center">
						<h6>Barang Ditemukan</h6>
						<h3><?php echo $ditemukan->num_rows(); ?></h3>
					</div>
				</div>

				<div class="kotak">
					<div class="text-center">
						<h6>Laporan Fasilitas</h6>
						<h3><?php echo $fasilitas->num_rows(); ?></h3>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-8" style="margin-left: -15px;">
					<div class="kotak">

						<div class="text-center">
							<h6>Grafik Per Bulan</h6>
							<canvas id="sales-chart"></canvas>
						</div>
					</div>

				</div>
			</div>

			
		</div>
	<!-- </div> -->
<!-- </div> -->

	<?php $this->load->view('admin/view_footer');?>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/chartjs-init.js"></script>

</body>
</html>