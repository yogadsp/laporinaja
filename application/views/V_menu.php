<?php
	$nama = $this->session->userdata('nama');
	$id_user = $this->session->userdata('id_user');
	$kontak = $this->session->userdata('kontak');
?>

<nav class="navbar navbar-expand-lg navbar-dark menu">
	  <a class="navbar-brand" href="<?php echo base_url();?>">
	  	<!-- <span style="color: #ff1a1a;">LAPORIN</span> -->
	  	<span style="color: black;">LAPORIN</span>
	  	<span style="color: #772e25;">AJA</span>
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto menu-co">
	      <li class="nav-item menu-content">
	        <a class="nav-link menu-content-f" href="<?php echo base_url();?>">Home</a>
	      </li>
	      <li class="nav-item menu-content">
	        <a class="nav-link menu-content-f" href="<?php echo base_url('C_kehilangan');?>">Kehilangan</a>
	      </li>
	      <li class="nav-item menu-content">
	        <a class="nav-link menu-content-f"
	        <?php 
	        	if(empty($nama) && empty($id_user)){ 
	        ?> 		
	        	href="" data-toggle="modal" data-target="#login">
	        <?php	
	        	} else {
	        ?>
	        		href="<?php echo base_url('C_lapor_fasilitas');?>">
	        <?php
	    		} 
	    	?>

	        Fasilitas</a>
	      </li>
	      <li class="nav-item menu-content">
	        <a class="nav-link menu-content-f" href="<?php echo base_url('C_tentang');?>">Tentang</a>
	      </li>

	    </ul>

	    <?php 
	    	if(empty($nama) && empty($id_user)){ 
	    ?>
		    	<a href="#" data-toggle="modal" data-target="#login">
		    		<button class="btn btn-outline-success my-2 my-sm-0 t_login">LOGIN</button>
		    	</a>
	    <?php
			} else { 
		?>	
			<div class="dropdown">

				<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
						<img style="width: 21px; height: 21px;" src="<?php echo base_url('assets/img/user.png') ?>">
				</button>

				<div class="dropdown-menu dropdown-menu-right">

					<div class="dropdown-item">
						<p>
						<img style="width: 40px; height: 40px;" src="<?php echo base_url('assets/img/user.png') ?>">
						<?php echo $nama; ?><br>
						</p>
					</div>
					
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url('C_Logout/aksi_logout') ?>">Log Out</a>
					
				</div>

			</div>
		<?php	
			}
		?>
	    
	    
	  </div>
	</nav>