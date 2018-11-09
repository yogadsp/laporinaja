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
        - id_barang
        - id_admin di null dulu
        - tanggal_laporan
       ------------>
          <form action="<?php echo base_url('C_Laporan_Barang/simpan_laporan');?>" method="post" id="frm_hilang">
            <h1 class="text-center form-header">Buat Laporan</h1>
            
            <div class="form-group row">
                <div class="col-sm-8">
                  <input type="radio" name="jenis" value="Kehilangan"> Kehilangan
                  <input type="radio" name="jenis" value="Ditemukan"> Ditemukan
                </div>
            </div>

            <div class="form-group row">
              <label for="nama_barang" class="col-sm-4 col-form-label">Nama Barang</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                </div>
            </div>

            <div class="form-group row">
              <label for="spesifikasi" class="col-sm-4 col-form-label">Spesifikasi</label>
                <div class="col-sm-8">
                  <textarea rows="4" cols="50" class="form-control" name="spesifikasi" form="frm_hilang" placeholder="Masukkan spesifikasi ... "></textarea>
                </div>
            </div>
						<!-- upload gambar -->
            <div class="form-group row">
              <label for="lokasi" class="col-sm-4 col-form-label">Lokasi</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
                </div>
            </div>
						
						
						<div class="form-group row">
              <label for="gambar" class="col-sm-4 col-form-label">Gambar</label>
                <div class="col-sm-8">
                  <input type="file" name="img_barang">
                </div>
						</div>

            <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
            <input type="hidden" name="kontak" value="<?php echo $kontak;?>">

            <input type="submit" class="btn btn-primary btn-block" value="Submit">

          </form>

        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row footer">
        <div class="footer-content">
          <h6>&copy; Copyright 2018 LAPORIN AJA Institut Teknologi Sumatera</h6>
        </div>
      </div>
    </div>

  <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/OwlCarousel/dist/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.mousewheel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  

</body>
</html>
