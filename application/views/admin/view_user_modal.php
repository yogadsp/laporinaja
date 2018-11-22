<!-- Modal -->
						<div class="modal fade" id="info_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title text-center" id="exampleModalLongTitle">INFO USER</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <div class="text-center">
						        	<div id="user_result"></div>
						        </div>
						      </div>
						      <div class="modal-footer">
						      
						      
						        
						      </div>
						    </div>
						  </div>
						</div>

						<script type="text/javascript">
    	// Start jQuery function after page is loaded
        $(document).ready(function(){
        	
        	// Start jQuery click function to view Bootstrap modal when view info button is clicked
            $('.view_data').click(function(){
            	// Get the id of selected phone and assign it in a variable called phoneData
                var id_user = $(this).attr('id');
                // Start AJAX function
                $.ajax({
                	// Path for controller function which fetches selected phone data
                    url: "<?php echo base_url(); ?>admin/infouser",
                    // Method of getting data
                    method: "POST",
                    // Data is sent to the server
                    data: {id_user:id_user},
                    // Callback function that is executed after data is successfully sent and recieved
                    success: function(data){
                    	// Print the fetched data of the selected phone in the section called #phone_result 
                    	// within the Bootstrap modal
                        $('#user_result').html(data);
                        // Display the Bootstrap modal
                        $('#info_user').modal('show');
                    }
                    ,error:function(data){
                          alert('fail');
                      }

	            });
	            // End AJAX function
	        });
	    });		
    </script>