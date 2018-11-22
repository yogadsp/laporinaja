<!DOCTYPE html>
<html>
<head>
	<title>Laporin Aja</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/OwlCarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/OwlCarousel/dist/assets/owl.carousel.theme.default.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/flickity/flickity.min.css" media="screen">
	<?php $this->load->view('tab-icon'); ?>

</head>
<body>

	<?php
	//     $id_user = $this->session->userdata('id_user'); 
	// if(empty($id_user)){
	// 	$nama = "";
	// 	$kontak = "";
	// } else {
	// 	$id_user = $this->session->userdata('id_user');
	// 	$nama = $this->session->userdata('nama');
	// 	$kontak = $this->session->userdata('kontak');
	// }

		$id_user = $this->session->userdata('id_user');
		$nama = $this->session->userdata('nama');
		$kontak = $this->session->userdata('kontak');
	    
  	?>
	<?php $this->load->view('V_menu'); ?>
	<?php $this->load->view('V_login'); ?>
	<?php $this->load->view('V_header'); ?>
	
		<div class="container">
	      <div class="row">
	      	<div class="owl-carousel owl-theme">
	        
	          		
	          	<?php
	          		$i = 0;
					foreach ($data->result() as $row ) { ?>

					<div class="item">
						<div class="card feed-content">
						  <div class="card-body">
						  	<?php 
					  		if($row->jenis == 'kehilangan') {
					  			echo '<p class="card-text text-status-h">Hilang</p>';
					  		} else if($row->jenis == 'ditemukan') {
					  			echo '<p class="card-text text-status-d">Ditemukan</p>';
					  		}
					  		?>
						    <a href="#"><h5 class="card-title"><?php echo $row->nama; ?></h5></a>
						    <h6 class="card-subtitle mb-2 text-muted"><?php echo $row->tanggal; ?></h6>
						    <p class="card-text" id="<?php echo "clampjs$i++"; ?>">
						    	<?php echo $row->spesifikasi; ?></p>
						  </div>
						</div>
					</div>

					<?php } ?>

					<!-- <div class="contoh1">
						<h5>2</h5>
					</div> -->
					<!-- <div class="owl-nav">
				        <div class="owl-prev"></div>
				        <div class="owl-next"></div>
				    </div> -->
				</div> 	
	        
	          	
		   </div>
		</div>

		<div class="container-fluid isi">
			<div class="row fitur-home">

				<div class="fitur-content">
					<div class="gambar">
						<img src="<?php echo base_url(); ?>assets/img/kehilangan.png">
					</div>
					<h4>Laporan Kehilangan Barang</h4>
					<p>Fitur ini berfungsi membantu user untuk menemukan barang dengan membuat suatu laporan kehilangan barang</p>
				</div>

				<div class="fitur-content">
					<div class="gambar">
						<img src="<?php echo base_url(); ?>assets/img/ditemukan.png">
					</div>
					<h4>Laporan Menemukan Barang</h4>
					<p>Fitur ini berfungsi membantu user jika menemukan suatu barang dengan membuat suatu laporan untuk mempermudah barang ditemukan oleh pemilik</p>
				</div>

				<div class="fitur-content">
					<div class="gambar">
						<img src="<?php echo base_url(); ?>assets/img/fasilitas.png">
					</div>
					<h4>Laporan Fasilitas</h4>
					<p>Fitur ini berfungsi membantu user untuk melaporkan segala yang berkaitan dengan fasilitas ITERA dapat berupa pengaduan kerusakan fasilitas maupun keluhan tentang fasilitas</p>
				</div>

				

			</div>
			

		</div>

		
		<?php $this->load->view('V_footer'); ?>
		<?php $this->load->view('V_pesan'); ?>
	
	<script src="<?php echo base_url();?>assets/OwlCarousel/dist/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/Clamp/clamp.min.js"></script>

	<script type="text/javascript">
		var owl = $('.owl-carousel');
		owl.owlCarousel({
		    loop:true,
		    nav:true,
		    navText: 
		    ['<img src="<?php echo base_url();?>assets/img/nav-prev.png">','<img src="<?php echo base_url();?>assets/img/nav-next.png">'],
		    margin:10,
		    dots:false,
		    responsive:{
		        0:{
		            items:1
		        },
		        800:{
		            items:3
		        },            
		        1000:{
		            items:4
		        }
		    },
		    autoplay:true,
    		autoplayTimeout:5000,
    		autoplayHoverPause:true
		});
		

		for (var i = 0; i < 10 ;i++) {
			var module = document.getElementById("clampjs"+i);
			$clamp(module, {clamp: 3});	
		}
		
	</script>

	<?php $this->load->view('fungsi_login'); ?>
	

</body>
</html>