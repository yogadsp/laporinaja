<!-- Modal -->
						<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title text-center" id="exampleModalLongTitle">LOGIN</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form id="frm_login" method="post">	
						        	<div class="row"></div>
						        	<input type="hidden" name="urlskrg" value="<?php echo current_url();?>" 
						        	id="urlskrg1">
						        	<div class="form-group">
						        		<label>Username		:</label>
						        		<input type="text" name="user" id="user1">
						        		<p id="notif_u"></p>
						        	</div>
						        	<div class="form-group">
						        		<label>Password		:</label>
						        		<input type="password" name="pass" id="pass1">
						        		<p id="notif_p"></p>
						        	</div>
						        	<input type="submit" class="btn btn-primary" value="SUBMIT">
						        </form>
						      </div>
						      <div class="modal-footer">
						      
						      
						        
						      </div>
						    </div>
						  </div>
						</div>

