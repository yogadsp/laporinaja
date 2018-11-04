<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya.css">
	
</head>
<body>

<div class="container-fluid">
	<div class="row">	
		<div class="header"></div>
	</div>
	<div class="row">

		<?php $this->load->view('admin/view_menu');?>

		<div class="col-md-10">
			<table class="display table table-sm table-hover" id="contoh">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">ID Barang</th>
			      <th scope="col">Nama Barang</th>
			      <th scope="col">Status</th>
			      <th scope="col">Spesifikasi</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php foreach($data->result() as $row) { ?>
			  	<tr>
			      <td><?php echo $row->id_barang ?></td>
			      <td><?php echo $row->nama_barang ?></td>
			      <td><?php echo $row->status ?></td>
			      <td><?php echo $row->spesifikasi ?></td>
			    </tr>
			<?php } ?>
			  </tbody>
			</table>
		</div>
	</div>

	
</div>
	
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/DataTables/datatables.min.js"></script> 
	
	<script type="text/javascript">
		$(document).ready(function() {
	    $('#contoh').DataTable();
	} );
	</script>
</body>
</html>