<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard | <?php echo $title ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap.min.css">
</head>
<body>

<?php $this->load->view('admin/view_header');?>
<?php $this->load->view('admin/view_menu');?>
	<div class="isi">
		<div class="row">

		<div class="col-md-10">
			<div class="kotak">
				<table class="table table-bordered table-striped" id="contoh">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">NIM</th>
				      <th scope="col">Nama</th>
				      <th scope="col">Kontak</th>
				    </tr>
				  </thead>
				  <tbody>
				  <?php 
				  	$no = 1;
				  	foreach($data->result() as $row) { ?>
				  	<tr>
				      <td><?php echo $no++ ?></td>
				      <td><?php echo $row->id_user ?></td>
				      <td><?php echo $row->nama ?></td>
				      <td><?php echo $row->kontak ?></td>
				    </tr>
				<?php } ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>

	
</div>
	
	<?php $this->load->view('admin/view_footer');?>
	
</body>
</html>