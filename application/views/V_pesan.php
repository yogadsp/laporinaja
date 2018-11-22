<?php $id_user = $this->session->userdata('id_user');?>

<!-- Modal -->
						<div class="modal fade" id="pesan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title text-center" id="exampleModalLongTitle">Kirim Pesan</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form id="frm_pesan" method="post">	
						        	<div class="row"></div>
						        	<input type="hidden" name="urlskrg" value="<?php echo current_url();?>" 
						        	id="urlskrg">
						        	<input type="hidden" name="id_user" value="<?php echo $id_user;?>" id="id_user">
                      <!-- <input type="hidden" name="id_admin" value="<?php echo "14116147";?>" id="id_admin"> -->
						        	<div class="form-group">
						        		<label>Subject		:</label>
						        		<input type="text" name="subject" id="subject">
						        	</div>
						        	<div class="form-group">
						        		<label>Pesan	:</label>
						        		<textarea name="isi" id="isi"></textarea>
						        	</div>
						        	<input type="submit" class="btn btn-primary" value="SUBMIT">
						        </form>
						      </div>
						      <div class="modal-footer">
						      
						      
						        
						      </div>
						    </div>
						  </div>
						</div>

<a href="#" data-toggle="modal" data-target="#pesan">
	<div class="chat-co" data-toggle="modal">
		Kirim Pesan
	</div>
</a>

<script>
      $(document).ready(function() {

          $("#frm_pesan").submit(function(e) {
          	e.preventDefault();
              var subject1 = $("#subject").val();
              var isi1 = $("#isi").val();
              var id_user1 = $("#id_user").val();
              // var id_admin1 = $("#id_admin").val();
              var urlskrg1 = $("#urlskrg").val();
              
              // var url_admin = '<?php echo base_url('');?>admin';

              // var urlskrg = '<?php echo current_url();?>';

              if ($("#subject").val() == '' && $("#isi").val() == '') {
              	  alert("Subject dan Isi Tidak Boleh Kosong");
              	  // $('#notif_p').html("Password tidak boleh kosong");
              } else if ($("#isi").val() == '') {
              	  alert("Isi pesan tidak boleh kosong");
                  // $('#notif_u').html("Username tidak boleh kosong");
              } else if ($("#subject").val() == ''){
                  alert("Subject tidak boleh kosong");
              } else {
                  $.ajax({
                      type:"post",
                      url:'<?php echo base_url(); ?>/C_Pesan/kirim',
                      data: {
                        subject: subject1,
                        isi: isi1,
                        send_by: id_user1,
                        // send_by: id_user1,
                        urlskrg: urlskrg1
                      },
                      dataType: 'html',
                      // data:new FormData(this),
                      // processData:false,
                      // contentType:false,
                      // cache:false,
                      // async:false,
                      success:function (pesan) {
                      	  alert('success');
                      	  // if(pesan == 'user'){ //data diambil dari data yang di echo kan
                      	  // 	alert('success');
                      	  // 	window.location = urlskrg;
                      	  // } 
                      	  // else if (pesan == 'admin') 
                      	  // {
                      	  // 	alert('success');
                      	  // 	window.location = url_admin;
                      	  // }
                      	  // else if (pesan == 'salah_id') 
                      	  // {
                      	  // 	alert('Username Salah');
                      	  // }
                      	  // else if (pesan == 'salah_pass')
                      	  // {
                      	  // 	alert('Password Salah');
                      	  // }
                      	  // else if (pesan == 'salah_semua') {
                      	  // 	alert("Username atau Password Salah");
                      	  // }
                          
                      },
                      error:function(pesan){
                          alert('Login Terlebih Dahulu!');
                      }
                  });
              }
          });
      });
  </script>