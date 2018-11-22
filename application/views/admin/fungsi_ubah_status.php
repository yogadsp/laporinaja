<script>
		$(document).ready(function(){
	        	
	        	// Start jQuery click function to view Bootstrap modal when view info button is clicked
	            $('.ubah_status').click(function(){
	            	// Get the id of selected phone and assign it in a variable called phoneData
	                var id_kehilangan = $(this).attr('id');
	                // Start AJAX function
	                $.ajax({
	                	// Path for controller function which fetches selected phone data
	                    url: "<?php echo base_url(); ?>admin/update_status",
	                    // Method of getting data
	                    method: "POST",
	                    // Data is sent to the server
	                    data: {id_kehilangan:id_kehilangan},
	                    // Callback function that is executed after data is successfully sent and recieved
	                    success: function(data){
	                    	// Print the fetched data of the selected phone in the section called #phone_result 
	                    	// within the Bootstrap modal
	                        // $('#status').html(data);
	                        // Display the Bootstrap modal
	                        // $('#info_user').modal('show');
	                        location.reload();
	                    }
	                    ,error:function(data){
	                          alert('fail');
	                      }

		            });
		            // End AJAX function
		        });
		    });
	</script>