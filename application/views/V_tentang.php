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
	<?php $this->load->view('V_menu'); ?>
    <?php $this->load->view('V_login'); ?>
    <?php $this->load->view('V_header'); ?>
	
		<div class="container-fluid isi">
            <div class="container">
    			<div class="row">
                    
                    <h2 class="tentang-title">Tentang</h2>
                    
                    <p style="text-align: justify;"> Laporin Aja adalah sebuah web yang berisi pelayanan tanggapan mengenai informasi kehilangan dan
                    laporan kerusakan sarana yang ada di kampus ITERA. Web ini nantinya akan berisi fitur yang dapat
                    melaporkan tanggapan aktivis ITERA mengenai sarana serta melaporkan penemuan ataupun kehilangan
                    barang. Fitur lain dari web ini adalah dengan adanya Live Chat yang dapat digunakan untuk melaporkan
                    barang hilang ataupun kerusakan sarana yang akan langsung ditanggapi oleh admin. Selanjutnya admin akan
                    merespon dengan langsung menindaklanjuti laporan dengan memberikan pengumuman di situs web ataupun
                    melapor ke pihak berwenang di ITERA.</p>

                    <p>Tim : <br>
                    1. Yoga Dwi Septana (14116006)<br>
                    2. Fadila Eka Noperta (14116021)<br>
                    3. Hendy Prasetya (14116048)<br>
                    4. Dewi Fidrianingrum (14116061)<br>
                    5. Meidiarni Kurnia Dewi (14116137)<br>
                    6. Muhammad Farhan (14116147)<br>
                    7. Mu’minatul Faizah (14116172)</p>
                </div>
    	</div>
    </div>
	<?php $this->load->view('V_footer'); ?>

	
	<script src="<?php echo base_url(); ?>assets/OwlCarousel/dist/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.mousewheel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
	

</body>
</html>