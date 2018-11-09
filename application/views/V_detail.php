<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/OwlCarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/OwlCarousel/dist/assets/owl.carousel.theme.default.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/flickity/flickity.min.css">
	<?php $this->load->view('tab-icon'); ?>
</head>
<body>
	<?php $this->load->view('V_menu'); ?>
	<?php $this->load->view('V_login'); ?>
	<?php $this->load->view('V_header'); ?>

	<div class="container isi">
		<div class="row detail">
			<div class="col-md-6">

				<div class="owl-carousel owl-theme">
					<div class="item">
						<div class="detail-img">
							<img src="<?php echo base_url();?>assets/barang/jam-tangan.jpg">
						</div>
					</div>
				</div>

			</div>
			

			<div class="col-md-6">
				<h2><?php echo $nama; ?></h2>
				<h5><?php echo $tanggal; ?></h5>
				<h5><?php echo $lokasi; ?></h5>
				<p><?php echo $spesifikasi; ?></p>
				<a href="#" data-toggle="modal" data-target="#lihat_kontak"><button type="button" class="btn btn-success">Lihat Kontak</button></a>
				<?php $this->load->view('V_lihat_kontak'); ?>

				
			</div>
		</div>
	</div>


	<?php $this->load->view('V_footer'); ?>

	<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.mousewheel.min.js"></script>
	<script src="<?php echo base_url();?>assets/OwlCarousel/dist/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
	    loop:false,
	    margin:10,
	    nav:true,
	    dots:true,
	    items:1
	})
	</script>

</body>
</html>