<!DOCTYPE html>
<html>
<head>
  <title>Laporin Aja</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya2.css">
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
    <div class="container-fluid isi">
      <div class="row">
        <div class="col-md-3">
        </div>

        <div class="col-md-6">
          <div class="form-laporan">
      <!------------ FORM !------------>
      <!------------ 
          input otomatis
        - id_laporan
        - id_user
        - id_barang
        - id_admin di null dulu
        - tanggal_laporan
       ------------>
          <form action="" method="post" id="frm_hilang" enctype="multipart/form-data">
            <h1 class="text-center form-header">Buat Laporan</h1>
            
            <div class="form-group row">
                <div class="col-sm-8">
                  <input type="radio" name="jenis" value="Kehilangan" id="jenis1"> Kehilangan
                  <input type="radio" name="jenis" value="Ditemukan" id="jenis1"> Ditemukan
                </div>
            </div>

            <div class="form-group row">
              <label for="nama_barang" class="col-sm-4 col-form-label">Nama Barang</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" id="nama_barang1" required>
                </div>
            </div>

            <div class="form-group row">
              <label for="spesifikasi" class="col-sm-4 col-form-label">Spesifikasi</label>
                <div class="col-sm-8">
                  <textarea rows="4" cols="50" class="form-control" name="spesifikasi" form="frm_hilang"     id="spesifikasi1" placeholder="Masukkan spesifikasi ... "></textarea>
                </div>
            </div>

            <div class="form-group row">
              <label for="lokasi" class="col-sm-4 col-form-label">Lokasi</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="lokasi" placeholder="Lokasi" id="lokasi1">
                </div>
            </div>
 
            <div class="form-group row">
              <label for="foto" class="col-sm-4 col-form-label">Foto</label>
                <div class="col-sm-8">
                  <input type="file" name="img_barang" accept=".jpg,.png,.jpeg,.bmp" id="foto" required>
                </div>
            </div>
            <input type="hidden" name="id_user" value="<?php echo $id_user;?>" id="id_user1">
            <input type="hidden" name="kontak" value="<?php echo $kontak;?>" id="kontak1">

            <input type="submit" class="btn btn-primary btn-block" value="Submit" id="submit">
            <!-- <p id="feedback"></p> -->

          </form>

        </div>
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
  <script src="<?php echo base_url();?>assets/js/jquery.form.min.js"></script>
  <!-- <script type="text/javascript">
        $(document).ready(function() { 
            $(".upload-image").click(function(){
              $("#frm-hilang").ajaxForm({target: '.preview'}).submit();
            });
        });
  </script> -->
<!--   <script type="text/javascript">
      $(document).ready(function() {
          $("#submit").click(function() {
              var jenis2 = $("input[type=radio]:checked").val();
              var nama_barang2 = $("#nama_barang1").val();
              var spesifikasi2 = $("#spesifikasi1").val();
              var lokasi2 = $("#lokasi1").val();
              var id_user2 = $("#id_user1").val();
              var kontak2 = $("#kontak1").val();
              var gambar2 = $("#foto").val();
              if (jenis2 == '' || nama_barang2 == '' || spesifikasi2 == '' || lokasi2 == '') {
                  alert("Insertion Failed Some Fields are Blank....!!");
              } else {
                  $.ajax({
                      type:"POST",
                      url:"<?php echo base_url(); ?>C_Laporan_Barang/simpan_laporan",
                      data: {
                        jenis: jenis2,
                        nama_barang: nama_barang2,
                        spesifikasi: spesifikasi2,
                        lokasi: lokasi2,
                        id_user: id_user2,
                        kontak: kontak2,
                        gambar: gambar2
                      },
                      
                      error:function(data){
                          alert('fail');
                      }
                  });
              }
          });
      });
  </script> -->


  

</body>
</html>