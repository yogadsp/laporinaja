<script>
      $(document).ready(function() {

          $("#frm_login").submit(function(e) {
          	e.preventDefault();
              var user2 = $("#user1").val();
              var pass2 = $("#pass1").val();
              var urlskrg2 = $("#urlskrg1").val();
              
              var url_admin = '<?php echo base_url('');?>admin';

              var urlskrg = '<?php echo current_url();?>';

              if (pass2 == '' && user2 == '') {
              	  alert("Username & Password kosong");
              	  // $('#notif_p').html("Password tidak boleh kosong");
              } else if (user2 == '' && pass2 != '') {
              	  alert("Username kosong");
                  // $('#notif_u').html("Username tidak boleh kosong");
              }	else if (user2 != '' && pass2 == '') {
              	alert("Password kosong");
              } else {
                  $.ajax({
                      type:"post",
                      url:'<?php echo base_url(); ?>/C_Login/aksi_login',
                      data: {
                        user: user2,
                        pass: pass2,
                        urlskrg: urlskrg2
                      },
                      dataType: 'html',
                      success:function (pesan) {
                      	  if(pesan == 'user'){ //data diambil dari data yang di echo kan
                      	  	alert('success');
                      	  	window.location = urlskrg;
                      	  } 
                      	  else if (pesan == 'admin') 
                      	  {
                      	  	alert('success');
                      	  	window.location = url_admin;
                      	  }
                      	  else if (pesan == 'salah_id') 
                      	  {
                      	  	alert('Username Salah');
                      	  }
                      	  else if (pesan == 'salah_pass')
                      	  {
                      	  	alert('Password Salah');
                      	  }
                      	  else if (pesan == 'salah_semua') {
                      	  	alert("Username atau Password Salah");
                      	  }
                      },
                      error:function(pesan){
                          alert('fail');
                      }
                  });
              }
          });
      });
  </script>